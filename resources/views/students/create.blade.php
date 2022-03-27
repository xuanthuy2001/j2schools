<form action="{{ route('store')}}" method="POST">
      @csrf

      <input type="text" name="firts_name">Firts Name
      <br>
      <input type="text" name="last_name">Last Name
      <br>
      <input type="date" name="birthdate">Birth Date
      <br>
      <input type="radio" name="gender" for="gender" value="1"> Male
      <br>
      <input type="radio" name="gender" value="0">famale
      <br>
      <button>Create</button>
</form>