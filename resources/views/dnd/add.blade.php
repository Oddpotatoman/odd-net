@extends('layouts.dndLay')

@section('css')

    <script src="{{ asset('js/dndJs.js') }}"></script>

@endsection

@section('title')
    Odds Dnd Cave
@endsection

@section('content')
    <div class="row justify-content-center">

        <div class="col-lg-6">
            <div>
                <b>Upload Table.txt file</b>
            </div>
            <div style="padding-right: 20px">
                <form action="/dndtables/add" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="tableName">Table name</label>
                        <input type="text" name="tableName" class="form-control" id="tableName" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="tableRef">Table original link</label>
                        <input type="text" class="form-control" name="tableRef" id="tableRef" aria-describedby="emailHelp" placeholder="Enter url">
                        <small id="tableRefHelp" class="form-text text-muted">We want to give credit to the original creators.</small>
                    </div>
                    <label for="nextTable">Linked table. This is the table that comes after this one.</label>
                    <div class="form-group">
                        <select id="nextTable" name="nextTable" class="form-control">
                            <option selected>Choose...</option>
                            <?php foreach ($tables as $table) { ?>
                            <option><?php echo $table->id."_".$table->tableName; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <label for="previousTable">Linked table. This is the table that comes before. This will bring you back and will bring you forward on the other.</label>
                    <div class="form-group">
                        <select id="previousTable" name="previousTable" class="form-control">
                            <option selected>Choose...</option>
                            <?php foreach ($tables as $table) { ?>
                            <option><?php echo $table->id."_".$table->tableName; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <b>Upload .txt file where each row is a roll</b>
                     <div class="input-group mb-3">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="table" id="table" onchange="$('#table-filetxt').html($(this).val());">
                            <label class="custom-file-label" id="table-filetxt" for="table">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection