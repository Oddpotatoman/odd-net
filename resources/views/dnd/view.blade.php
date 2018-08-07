@extends('layouts.dndLay')

@section('css')

    <script src="{{ secure_asset('js/dnd/view.js') }}"></script>

@endsection

@section('title')
    Odds Dnd Cave
@endsection

@section('content')

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="row" style="padding-bottom: 15px">
                <div class="col-lg-4">
                    <?php if ($previousTable != null) { ?>
                    <a class="btn btn-primary" href="<?php echo '/dndtables/view/'.$previousTable->id ?>" role="button"><?php echo $previousTable->tableName ?></a>
                    <?php } ?>
            </div>
            <div class="col-lg-4">
                <b><?php echo $table->tableName ?></b>
            </div>
            <div class="col-lg-4" style="text-align: right">
            <?php if ($nextTable != null) { ?>
                <a class="btn btn-primary" href="<?php echo "/dndtables/view/".$nextTable->id ?>" role="button"><?php echo $nextTable->tableName ?></a>
                <?php } ?>
            </div>
            </div>
            <div class="form-row align-items-center" style="padding-bottom: 15px">
                <div class="col-lg-10 my-6">
                    <input type="text" name="tableSearch" class="form-control" id="tableSearch" placeholder="Roll number or nam">
                </div>
                <div class="col-lg-2 my-6">
                    <button type="button" class="btn btn-primary" id="table-auto-roll-button" onclick="clickAutoRoll()">Roll for me</button>
                </div>
            </div>
            <div style="padding-bottom: 15px">
                Source: <a id="table_source_link" href="<?php echo $table->from ?>"><?php echo $table->from ?></a>
            </div>
            <table class="table table-bordered" id="table-for-rolls">

                <thead>
                 <tr>
                    <th scope="col">#</th>
                    <th scope="col">Text</th>
                 </tr>
                </thead>
                <tbody>
                <?php
                $count = 1;
                foreach($rolls as $roll) { ?>
                <tr id="">
                    <th scope="row"><?php echo $count ?></th>
                    <td><?php echo $roll->text ?></td>

                </tr>

                <?php
                $count++;
                } ?>
                </tbody>

            </table>
        </div>
    </div>

@endsection