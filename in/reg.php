	<form action="inreg2.php" method="post">

			<label for="username">Username:&nbsp;</label>

			<input type="text" name="username"  size="25" />

	<label for="parola">Parola:&nbsp; </label>

		<input type="password" name="parola" size="25" />
		
			<label for="parola2">Confirmati parola:&nbsp;</label>

			<input type="password" name="parola2" size="25" />
			
			<label for="email">Adresa E-mail:&nbsp;</email>

			<input type="text" name="email"  size="25" />
			
			<label for="nume">Nume:&nbsp;</label>
			<input type="text" name="nume" size="25" />
			
			<label for="prenume">Prenume:&nbsp;</label>
		<input type="text" name="prenume" size="25" >
		<label for="faculta">Facultate:&nbsp;</label>
			<<select name="faculta">
								<option  value="">Alege</option>

		  						<option  value="mate">Matematica </option>

								<option  value="info">Informatica</option>

								<option  value="psiho">Psihologie</option>

								<option  value="tele">Telecomunicatii</option>

								<option  value="mang">Management</option>

								<option  value="litere">Litere</option>
								<option  value="ase">Stiinte Economice</option>
</select>
		<label for="anul">Anul:&nbsp;</anul>
			<select name="anul">
								<option  value="">Alege</option>

		  						<option  value="1">Anul I</option>

								<option  value="2">Anul II</option>

								<option  value="3">Anul III</option>
								<option  value="4">Anul IV</option>
								<option  value="5">Anul V</option>
								<option  value="6">Anul VI</option>
								<option  value="M1">Master I</option>
								<option  value="M2">Master II</option>
							  </select> 
		<input type="submit" name="submit" id="submit" value="Trimite">

</form>