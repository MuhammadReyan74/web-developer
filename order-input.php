    <h2>Input Data Pesanan</h2>

    <form action="order-proses.php" method="post">

        <table>
            <tr>
                <td>NAMA</td>
                <td><input type="text" name="order_nama"></td>
            </tr>
            <tr>
                <td>NO HP</td>
                <td><input type="text" name="order_hp"></td>
            </tr>
            <tr>
                <td>PAKET</td>
                <td>
                    <select name="order_paket" id="">
                        <option value="1">Paket 1</option>
                        <option value="2">Paket 2</option>
                        <option value="3">Paket 3</option>
                        <option value="4">Paket 4</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>TAMBAH PESANAN</td>
                <td><input type="text" name="order_tambahan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit"  value="SIMPAN" name="order_simpan"></td>
            </tr>

        </table>

    </form>