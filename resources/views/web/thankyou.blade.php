@extends('web.layouts.main')
@section('content')



<section>
    <div class="thank_you">
        <div class="container">
            <h4>Thank You</h4>
            <i class="fa fa-check"></i>
        </div>
    </div>
</section>

@endsection
@section('link')
<style>
    .header_main {
    background: rgb(24 16 60);
    
}
    .header-category ul.collapse-category.show {
        display: none;
    }

 .thank_you {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 101px 0 30px;
    text-align: center;
}

.thank_you h4 {
    font-size: 102px;
    /* font-family: 'Outfit-SemiBold'; */
    font-weight: 600;
    color: #ff6a1f;
    text-align: center;
    text-transform: uppercase;
}

.thank_you i {
    font-size: 96px;
    margin: 47px 0;
    color: #ff6a1f;
    text-align: center;
    animation: jello 2s linear infinite;
}


</style>
@endsection
@section('js')
@endsection
