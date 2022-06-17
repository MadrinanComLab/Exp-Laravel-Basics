@extends("layouts.layout") <!--/ THIS MEANS layouts/layout.blade.php /-->

@section("content") <!--/ THE CHUCK OF CODE IN HERE WILL PUT IT IN layouts/layout.blade.php IN @yield("content") /-->
<div class="flex-center position-ref full-height">
    

    <div class="content">
        <div class="title m-b-md">
            Pizza List - {{ $id }}
        </div>
    </div>
</div>
@endsection