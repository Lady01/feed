@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">                
                    <h2>
                        Blog <a href=”<?php echo $feed->get_permalink(); ?>” target=”_blank”>
                        <?php echo $feed->get_title(); ?></a>
                    </h2>
                    <nav>
                    <?php

                        $max = $feed->get_item_quantity();
                        for ($x = 0; $x < $max; $x++):
                            $item = $feed->get_item($x);

                    ?>
                    <div class=”item”>
                        <p class=”title”>
                            <a href=”<?php echo $item->get_permalink(); ?>” target=”_blank”>
                                <?php echo $item->get_title(); ?>
                            </a>
                        </p>
                    </div>
                    <?php endfor; ?>
                    </nav>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
