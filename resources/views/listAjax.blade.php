<table>
<thead>
<tr>
<td width="550px">Название</td>
<td>Широта</td>
<td>Долгота</td>
<td>Количество жителей</td>
</tr>
</thead>
<tbody>
@foreach ($towns as $town)
  <tr>
  <td>{{ $town->title }}</td>
  <td>{{ $town->lat }}</td>
  <td>{{ $town->lon }}</td>
  <td>{{ $town->numpop }}</td>
  </tr>
@endforeach
</tbody>
</table>