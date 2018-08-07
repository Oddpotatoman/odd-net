@extends('layouts.dndLay')

@section('css')

    <script src="{{ secure_asset('js/dnd/index.js') }}"></script>

@endsection

@section('title')
    Odds Dnd Cave
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-2">
            <div class="list-group">
                <a class="list-group-item list-group-item-action" href="/dndtables/add">New Table</a>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="form-row justify-content-center" style="padding-bottom: 15px">
                <div class="col-lg-6 my-6">
                    <input type="text" name="tableSearch" class="form-control" id="tableSearch" placeholder="Tablename">
                </div>
            </div>
            <table class="table" id="table-for-rolls">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Source</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($tables as $table) { ?>

                    <tr class="table-data-roll">
                        <td class><?php echo $table->id ?></td>
                        <td><a href="/dndtables/view/<?php echo $table->id ?>"><?php echo $table->tableName ?></a></td>
                        <td><a href="<?php echo $table->from ?>"> Source link </a></td>
                    </tr>

                <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="col-lg-2">

        </div>

    </div>
@endsection