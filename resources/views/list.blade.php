<h1> Fetching Data from a Database </h1>
<table border="1">
    <tr>
        <td> Name </td>
        <td> Password </td>
        
    </tr>
    @foreach($members as $member)
    <tr>
        <td> {{$member['id']}} </td>
        <td> username </td>
        <td> Password </td>
        
    </tr>
    @endforeach
</table>