document.getElementById('#getApi').addEventListener('click', getApi);
document.getElementById('#removerApi').addEventListener('click', removerApi);
// ABRIR API
function getApi(){
	const data = { location:output }
	const options = {
		method: 'POST',
		headers: { 'Content-Type':'application/json', },
		body: JSON.stringify(data),
	}
	fetch('conexao.php', options)
	.then((res) => res.json())
	.then((data) =>{
		let output = `<h2 class="mb-4">Resultado:</h2>`;
		data.forEach( function(post){
			output +=
			`
			<table class="table table-striped">
			<thead class="bg-primary text-white">
				<tr>
					<th>ID:</th>
					<th>Nome:</th>
					<th>Sobrenome:</th>
					<th>Twitch:</th>
					<th>Email:</th>
					<th>Link:</th>
				</tr>
			</thead>
				<tbody>
					<td> ${post.id} </td>
					<td>  ${post.nome} </td>
					<td>  ${post.sobrenome}  </td>
					<td>  ${post.stream}  </td>
					<td>  ${post.email}  </td>
					<td>  ${post.link}  </td>
				</tbody>
			</table>
			`;
		});
		document.getElementById('output').innerHTML = output;
	})
}
// REMOVER API
function removerApi(e){
	e.preventDefault()
	output.style.display ='none';
}