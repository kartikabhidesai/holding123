var Datatable = function(){
   
    var datatable = function(){
            $('#employeeDatatables').DataTable();
    }
    return{
        init:function(){
            datatable();
        },
    }
}();