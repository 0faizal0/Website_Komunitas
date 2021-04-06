<!DOCTYPE html>
<html lang="en">
<head>
    <h1 style="text-align:center; font-family:Brush Script MT; font-size:300%;">Edit Page</h1>
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
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            <h4>Current Role: {{ $user_roles->role }}</h4>
            <h5>
                @if ($user_roles->isban == '0')
                    <label class="py-2 px 3 badge btn-primary">Active</label>
                @elseif ($user_roles->isban == '1')
                    <label class="py-2 px 3 badge btn-danger">Inactive</label>
                @endif
            </h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="/role-update/{{ $user_roles->id }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('PUT') }}
            
                        <div class="form-group">
                        <input type="text" name="name" class="form-control" value="{{ $user_roles->name }}">
                        </div>
            
                        <div class="form-group">
                        <input type="text" class="form-control" readonly value="{{ $user_roles->email }}">
                        </div>
            
                        <div class="form-group">
                            <label>Choose Role</label>
                            <select name="role" class="form-control">
                                <option value="admin">Admin</option>
                                <option value="user">User</option>
                            </select>
                        </div>
            
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="/admin" class="btn btn-danger">Cancel</a>
            
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