{{--name--}}
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Name</span>
    </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
           name="name" value="{{old('name', $user->name ?? '')}}">
</div>

{{--Email--}}
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Email</span>
    </div>
    <input type="email" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
           name="email" value="{{old('email', $user->email ?? '')}}">
</div>
{{--Pass--}}
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Pass</span>
    </div>
    <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm"
           name="password" >
</div>


{{--Role--}}
<div class="input-group input-group-sm mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-sm">Role</span>
    </div>
    <select class="custom-select" id="inputGroupSelect01" name="role">
        @if(isset($user))
            <option value="admin"  @if($user->role == 'admin') selected @endif >Admin</option>
            <option value="manager" @if($user->role == 'manager') selected @endif>Manager</option>
            <option value="user" @if($user->role == 'user') selected @endif >User</option>
        @else
            <option value="#" selected  >No choose</option>
            <option value="admin">Admin</option>
            <option value="manager" >Manager</option>
            <option value="user" >User</option>
        @endif
    </select>
</div>
