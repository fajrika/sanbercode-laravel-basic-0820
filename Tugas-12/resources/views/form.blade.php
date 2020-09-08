<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fajrika</title>
</head>
<body>
    <p>
        <h1>Buat Account Baru!</h1>
    </p>
    <p>
        <h2>Sign Up Form</h2>
    </p>
    <form action="{{route('welcome')}}" method="post">
        @csrf
        @if (session('error'))
            <div class="alert alert-danger" style="background-color:red;color:white">
                {{ session('error') }}
            </div>
            <br>
        @endif
        <label>First name:</label><br><br>
        <input type="text" name="fname" value="{{old('fname')}}" required><br><br>

        <label>Last name:</label><br><br>
        <input type="text" name="lname" value="{{old('lname')}}" required><br><br>

        <label>Gender:</label><br><br>
        <input type="radio" name="gender" value="male" {{old('gender')=='male'?'checked':''}} required>
        <label>Male</label><br>
        <input type="radio" name="gender" value="female" {{old('gender')=='female'?'checked':''}} required>
        <label>Female</label><br>
        <input type="radio" name="gender" value="other" {{old('gender')=='other'?'checked':''}} required>
        <label>Other</label><br><br>

        <label>Nationality</label><br><br>
        <select name="nationality" value="{{old('nationality')}}" required>
            <option value="indonesia">Indonesian</option>
            <option value="nihon">Nihon</option>
        </select><br><br>

        <label>Language Spoken:</label><br><br>
        <input type="checkbox" name="language" value="indo" {{old('language')=='indo'?'selected':''}}>
        <label>Bahasa Indonesia</label><br>
        <input type="checkbox" name="language" value="english" {{old('language')=='english'?'selected':''}}>
        <label>English</label><br>
        <input type="checkbox" name="language" value="other" {{old('language')=='other'?'selected':''}}>
        <label>Other</label><br><br>

        <label>Bio:</label><br><br>
        <textarea type="text" name="bio" cols="30" rows="10">{{old('bio')}}</textarea><br><br>

        <button type="submit">Sign Up</button>
    </form>
</body>

</html>