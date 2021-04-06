<!DOCTYPE html>
<html lang="en">
<head>
    <h1 style="text-align:center; font-family:Brush Script MT; font-size:300%;">View Page</h1>
</head>
<body>
    <style>
        table.darkTable {
    font-family: "Comic Sans MS", cursive, sans-serif;
    width: 80%;
    height: 200px;
    /* background-color:#000000; */
    text-align: center;
    border-radius:8px;
    border-collapse: collapse;
    overflow: hidden;
    -moz-border-radius:6px;
  }
  /* table.darkTable td, table.darkTable th {
    border: 2px solid #4A4A4A;
    padding: 3px 2px;
  } */
  table.darkTable tbody td {
    font-size: 13px;
    border-bottom: 1px solid #b5b5b3;
  }
  /* table.darkTable tr:nth-child(even) {
    background: #888888;
  } */
  table.darkTable thead {
    background: #067479;
    border-bottom: 3px solid #000000;
  }
  table.darkTable thead th {
    font-size: 15px;
    font-weight: bold;
    color: #3d5657;
    text-align: center;
    border-left: 2px solid #4A4A4A;
  }
  table.darkTable thead th:first-child {
    border-left: none;
  }
  
  tr.border_bottom td {
  border-bottom: 1px solid black;
}

  table.darkTable tfoot td {
    font-size: 12px;
  }
    </style>

<div class="row">

    <div class="col-md-12">
        <div class="card">
            <div class="card-body">

            <h4>Your Role: {{ $user_roles->role }}</h4>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="" method="">
            
                        <div class="form-group">
                        <input type="text" name="name" class="form-control" readonly value="{{ $user_roles->name }}">
                        </div>
            
                        <div class="form-group">
                        <input type="text" class="form-control" readonly value="{{ $user_roles->email }}">
                        </div>
            
                        </div>
                    </div>
                </div>
                </div>
            </form>
                    </div>
                </div>
            </div>

    <div class="row">
        <div class="col-md-12">
            <div class="copyright">
                <p>Copyright © 2021 Muslim Go Online</a>.</p>
            </div>
</body>
</html>