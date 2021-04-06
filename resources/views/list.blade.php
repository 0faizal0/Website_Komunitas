{{-- <!DOCTYPE html>
<html lang="en" style="background-color: #68aeba">
<head>
    <h1 style="text-align:center; font-family:Brush Script MT; font-size:300%;">Member List</h1>
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
    color: #0CFCFF;
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
    <table cellspacing="0" cellpadding="0" class="darkTable" style="margin-left:auto;margin-right:auto;">
        <tr style="background-color:#4d76b3; color:#ffffff;">
            <td>Id</td>
            <td>Name</td>
            <td>Email</td>
            <td>Role</td>
        </tr>
        @foreach ($auth3 as $member)
        <tr style="background-color: #ffffff; color:Gray;">
            <td>{{$member['id']}}</td>
            <td>{{$member['name']}}</td>
            <td>{{$member['email']}}</td>
            <td>{{$member['role']}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html> --}}