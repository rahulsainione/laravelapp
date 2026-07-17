<div>
    <form method="POST" action="/submit-form">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <input type="checkbox" id="subscribe" name="subscribe" value="yes">
        <select name="gender" id="gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select>
        <button type="submit">Submit</button>
    </form>
</div>
