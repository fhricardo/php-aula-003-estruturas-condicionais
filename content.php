<section>
    <h3>IF/ELSE</h3>
    <p>Digite uma idade e clique em OK para saber se é menor, maior ou idoso:</p>
    <form action="ifelse.php" method="post">
        <input type="text" name="idade" id="idade" placeholder="Digite sua idade" required>
        <input type="submit" value="OK">
    </form>
</section>
<section>
    <h3>SWITCH/CASE</h3>
    <p>Selecione um alimento e clique em OK para conhecer suas características:</p>
    <form action="switch.php" method="post">
        <select name="comidas" id="comidas">
            <option value="pizza">Pizza</option>
            <option value="hamburguer">Hambúrguer</option>
            <option value="hotdog">Hot-Dog</option>
            <option value="fries">Batata Frita</option>
            <option value="chicken">Frango Frito</option>
            <option value="donuts">Donuts</option>
            <option value="miojo">Miojo</option>
        </select>
        <input type="submit" value="OK">
    </form>
</section>