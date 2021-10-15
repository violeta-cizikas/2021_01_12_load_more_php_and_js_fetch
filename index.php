<!-- 1 -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css?v=2">
	<title>2021_01_12_load_more_php_and_js_fetch</title>
</head>

<body>
	<!-- 2 -->
	<div class="container">

		<div class="imgContainer" id="imgContainer">
			<!-- 15 _ pasalinami img is html
			<img src="img/1.jpg"></img>
			<img src="img/2.jpg"></img>
			<img src="img/3.jpg"></img>
			<img src="img/4.jpg"></img> -->
		</div>

		<button type='submit' id="button">Load More</button>

	</div>

	<!-- 6 _ js rasomas i gala, jei dirbama
	su elementais ir, jei norima, kad jie jau butu uzkrauti -->
	<script type="text/javascript">
		// 7 _ surandamas elementas pagal id
		let button = document.getElementById("button");
		// 18 _ sukuriamas kintamasis
		let imgContainer = document.getElementById("imgContainer");
		// 26 _ sukuriamas kintamasis, kurio pagalba sekama kiek img jau yra
		let imgNumber = 0;
		// 8 _ ant buttono uzregistrujama f-ja, kuri bus iskvieciama paclikinus
		button.addEventListener("click", function() {
			// 9 _ iskvieciamas fetch f-ja, kuri daro internetine uzklausa i adresa
			// 20 _  parasomas get parametas ?from=0 tam,
			// kad data.php zinotu nuo kelinto paveikslelio
			// grazinti is masyvo paspaudus load
			// 28 _ ?from=0 pasalinamas nulis + kintamasis
			fetch("data.php?from=" + imgNumber)
			// 12 _ rezultato interpretavimas kaip json
			// => response.json() desine puse iskart returninasi
			// kai dirbama su promisais, jei then() f-joje
			// kazkas returninama naudojant tolimesnius thenus,
			// tai, kas buvo returninta - tampa pirmu argumentu
			.then(response => response.json())
			// 10 _ fetch iskart negrazina duomenu, o grazinamas pazadas(promisas)
			// kadangi internetine uzklausa gali uztrukti arba nepavykti - naudojamas metodas then()
			// response - internetines uzklausos atsakymas
			// 13 _ pervadinamas argumentas is response i data
			// 14 _ vietoje response.body consologinam data ir
			 // narsykleje grazinamas kaip masyvas
			.then(function(data) {
				// 16 _ uzkomentuojamas console.log(data)
				// console.log(data);
				// 17
				for (var i = 0; i < data.length; i++) {
					// 19 _ ivedami img elementai i img konteineri
					imgContainer.innerHTML += `<img src='${data[i]}'>`
				}
				// 27 prilyginamas keturiems
				imgNumber += 4;

			})
		})
	</script>

</body>
</html>	