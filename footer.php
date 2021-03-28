</div>
</div>
</div>
</div>
</body>
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/dataTables.responsive.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/responsive/2.2.5/js/responsive.bootstrap.min.js"></script>
<script type="text/javascript" language="javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script src="datepicker/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" class="init">


    $(document).ready(function() {
        // Setup - add a text input to each footer cell
        $('#search thead th').each( function () {
            var title = $(this).text();
            $(this).html( ''+title+' <br><input type="text" class="filter" placeholder="Search '+title+'" />' );
        } );

        // DataTable
        var table = $('#search').DataTable({
            responsive: true,


            initComplete: function () {
                // Apply the search
                this.api().columns().every( function () {
                    var that = this;

                    $( 'input', this.header() ).on( 'keyup change clear', function () {
                        if ( that.search() !== this.value ) {
                            that
                                .search( this.value )
                                .draw();
                        }
                    } );
                } );
            }
        });
//table.columns( [0,1,2,3,4,5,6,7] ).visible( true );
//table.columns( [8,9,10,11,12] ).visible( false );

        $('.filter').on('click', function(e){
            e.stopPropagation();
        });

        new $.fn.dataTable.FixedHeader( table );
        $("#search th.datepicker input").datepicker({
            format: "yyyy-mm-dd",

        });
    } );


</script>
<script>
bars.onclick = function(){
  // console.log(menu.offsetWidth/screen.width+"%");
  if(menu.classList.contains("menu_icons")){
    menu.classList.remove("menu_icons");
    main_content.style.width=85+"%";

  }else{
    menu.classList.add("menu_icons");
    main_content.style.width=95+"%";
    // main_content.style.width=100+"%"-(menu.offsetWidth/screen.width+"%");

  }
}

</script>
</html>
