// public/js/init-alpine.js
function data() {
  function getThemeFromLocalStorage() {
    // if user already changed the theme, use it
    if (window.localStorage.getItem('dark')) {
      return JSON.parse(window.localStorage.getItem('dark'));
    }
    // else return their preferences
    return !!window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
  }

  function setThemeToLocalStorage(value) {
    window.localStorage.setItem('dark', value);
  }

  return {
    dark: getThemeFromLocalStorage(),
    toggleTheme() {
      this.dark = !this.dark;
      setThemeToLocalStorage(this.dark);
    },
    isSideMenuOpen: false,
    toggleSideMenu() {
      this.isSideMenuOpen = !this.isSideMenuOpen;
    },
    closeSideMenu() {
      this.isSideMenuOpen = false;
    },
    isNotificationsMenuOpen: false,
    toggleNotificationsMenu() {
      this.isNotificationsMenuOpen = !this.isNotificationsMenuOpen;
    },
    closeNotificationsMenu() {
      this.isNotificationsMenuOpen = false;
    },
    isProfileMenuOpen: false,
    toggleProfileMenu() {
      this.isProfileMenuOpen = !this.isProfileMenuOpen;
    },
    closeProfileMenu() {
      this.isProfileMenuOpen = false;
    },
    isAccountsMenuOpen: false, // Unique state for Account dropdown
    toggleAccountMenu() {
      this.isAccountsMenuOpen = !this.isAccountsMenuOpen;
    },
    isReportMenuOpen: false, // Unique state for Report dropdown
    toggleReportMenu() {
      this.isReportMenuOpen = !this.isReportMenuOpen;
    },
    isNewsMenuOpen: false, // Unique state for News dropdown
    toggleNewsMenu() {
      this.isNewsMenuOpen = !this.isNewsMenuOpen;
    },
    isCMSMenuOpen: false, // Unique state for CMS dropdown
    toggleCMSMenu() {
      this.isCMSMenuOpen = !this.isCMSMenuOpen;
    },
    isExpenseMenuOpen: false, // Unique state for Expense dropdown
    toggleExpenseMenu() {
      this.isExpenseMenuOpen = !this.isExpenseMenuOpen;
    },
    // Modal
    isModalOpen: false,
    trapCleanup: null,
    openModal() {
      this.isModalOpen = true;
      this.trapCleanup = focusTrap(document.querySelector('#modal'));
    },
    closeModal() {
      this.isModalOpen = false;
      this.trapCleanup();
    },
  };
}

// Note: Ensure focusTrap is defined if you're using it for modal accessibility
function focusTrap(element) {
  // Placeholder for focus-trap logic; implement or include focus-trap library
  return function cleanup() {};
}