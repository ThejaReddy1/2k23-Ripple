<?php include "header.php" ?>
<body>
    <div class="conatct" style="margin:100px;">
        <div class="alert alert-success">Successfully Registred<br>Thank You.</div>
        <div class="card">
            <div class="card-body" id="printable">
                <div class="row">
                    <div class="col-sm-12">
                        <img src="img/school year.jpg" alt="Ripple Banner" height="200px" width="100%"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        From
                        <address>
                            <strong>RIPPLE 2K23</strong><br>
                            RGMCET, Nerawada 'X' Roads,<br>
                            Nandyal, Andhra Pradesh<br>
                            Phone: (+91)-6281818878<br>
                                    (+91)-9494740349<br>
                            Email:rgmcseripple2k23@gmail.com 
                        </address>
                    </div>
                    <div class="col-sm-4">
                        To
                        <address>
                            <strong>John Doe</strong><br>
                            Event Name<br>
                            Phone: (555) 539-1037<br>
                            Email: john.doe@example.com
                        </address>
                    </div>
                    <div class="col-sm-4">
                        <strong>Invoice</strong><br>
                        <b>Order ID:</b> 4F3S8J<br>
                        <b>Payment Date:</b> 2/22/2014<br>
                        <b>Account:</b> 968-34567
                    </div>
                </div>
                <div class="row">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Event ID</th>
                                <th>Event Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>Event Name</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            
            </div> 
            <div class="card-footer"><button type="button" class="btn btn-success float-right" style="margin-right: 5px;" onClick="printDiv('printable');">
                    <i class="fa fa-print"></i>Print</button></div>
        </div>
        </div>
    </div>

    <script>
        function printDiv(ele) {
            var headstr = "<html><head><title></title></head><body>";
            var footstr = "</body>";
            var newstr = document.all.item(ele).innerHTML;
            var oldstr = document.body.innerHTML;
            document.body.innerHTML = headstr + newstr + footstr;
            window.print();
            document.body.innerHTML = oldstr;
            return false;
                
        }
    
    </script>
</body>
<?php include "footer.php" ?>