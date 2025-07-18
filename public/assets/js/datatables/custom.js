$('#datatable').DataTable({
    scrollX: true,             
    responsive: false,        
    dom: 'Bfrtip',
    buttons: ['excel', 'pdf', 'print'],
    language: {
        search: "",
        searchPlaceholder: "Search...",
        lengthMenu: "প্রতি পৃষ্ঠায় _MENU_ রেকর্ড",
        info: "_TOTAL_ রেকর্ডের মধ্যে _START_ থেকে _END_ প্রদর্শিত হচ্ছে",
        paginate: {
            next: "পরবর্তী",
            previous: "পূর্ববর্তী"
        },
        zeroRecords: "কোনো মিল খুঁজে পাওয়া যায়নি"
    }
});
