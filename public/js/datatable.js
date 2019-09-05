var Datatable = function(){
   
    var datatable = function(){
            $('#datatable').DataTable();
    }
    return{
        init:function(){
            datatable();
        },
    }
}();