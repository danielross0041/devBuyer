<?php
$brands = App\Models\brand::where('is_active',1)->where('is_deleted',0)->get();
?>

<div class="collection-collapse-block border-0 open">
    <h3 class="collapse-block-title">brand</h3>
    <div class="collection-collapse-block-content">
        <div class="collection-brand-filter">
            <ul class="category-list">
                @foreach($brands as $brand)
                <li><a href="javascript:void(0)">{{$brand->name}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>