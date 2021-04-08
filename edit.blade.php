@extends('layouts.app')

@section('content')

<div class="card card-defualt">
<div class="card-header">
    Edit User Rights
</div>
<div class="card-body">
@if ($user->admin == True)
    <form action="{{route('user.update',$user->id)}}" method='POST'>
        @csrf
        @method('PUT')

        @if( $user->admin == 1)
            <input type="checkbox" id="admin" class='checked' name="admin" checked="on">
            
            <label for="admin"> Admin</label><br>
        @endif
        @if( $user->admin == 0)
            <input type="checkbox" id="admin" class='checked' name="admin" >
        
            <label for="admin"> Admin</label><br>
        @endif

        @if( $user->auth1 == 1)
            <input type="checkbox" id="auth1" class='checked' name="auth1"  checked="on">
        
            <label for="auth1"> Auth1</label><br>
        @endif
        @if( $user->auth1 == 0)
            <input type="checkbox" id="auth1" class='checked' name="auth1" >
        
            <label for="auth1"> Auth1</label><br>
        @endif

        @if( $user->auth2 == 1)
            <input type="checkbox" id="auth2" class='checked' name="auth2" checked="on">

            <label for="auth2"> Auth2</label><br>
        @endif
        @if( $user->auth2 == 0)
            <input type="checkbox" id="auth2" class='checked' name="auth2" >
        
            <label for="auth2"> Auth2</label><br>
        @endif

    
        <input type="submit" value="Save" class='btn btn-success btn-sm float-right'>
    </form>
@else
    You are Not eligible to    
@endif     
<script>
    $("form").submit(function () {

        var this_master = $(this);

        this_master.find('input[type="checkbox"]').each( function () {
            var checkbox_this = $(this);


            if( checkbox_this.is(":checked") == true ) {
                checkbox_this.attr('value','1');
            } else {
                checkbox_this.prop('checked',true);
                //DONT' ITS JUST CHECK THE CHECKBOX TO SUBMIT FORM DATA    
                checkbox_this.attr('value','0');
            }
    })
    })
</script>
</div>
</div>


@endsection