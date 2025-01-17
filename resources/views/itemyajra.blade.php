<!DOCTYPE html>
<html lang="en">

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.css" />

    <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Table Item </title>
</head>

<body>
 <div class="container-fluid col-md-9 ms-sm-auto col-lg-10 px-md-4">
 <div class="row d-flex col-12 justify-content-center">
    <div class="table-responsive" >
        <table id="Tableitem" class=" table table-stripped " class="text-center" style="width:100%">
            <thead>
                <tr>
                    <th> No </th>
                    <th> ID </th>
                    <th> Item </th>
                    <th> Quantity </th>
                    <th> Price </th>
                    <th> Total </th>
                    <th> Action </th>
                </tr>
            </thead>
            <tbody>  
            </tbody>
            <tfoot>
                <tr>
                    <th> No </th>
                    <th> ID </th>
                    <th> Item </th>
                    <th> Quantity </th>
                    <th> Price </th>
                    <th> Total </th>
                    <th> Action </th>
                </tr>
            </tfoot>
        </table>
     </div>
 </div>
    </div>

    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/dt-1.11.5/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <script>
       $(document).ready(function() {
           
        $('#Tableitem').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('itemku') !!}',
        columns: [
            {
                "itemku": "id",
                    render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            { data: 'id', name: 'id' },
            { data: 'item', name: 'item' },
            { data: 'qty', name: 'qty' },
            { data: 'price', name: 'price' },
            { data: 'total', name: 'total' },
            { data: 'action', name: 'action' },
        ]
    });
        } ); 
    </script>

</body>

</html>
