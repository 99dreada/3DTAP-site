<html>
    <head>
        <?php
            include_once("includes/rel.html")
        ?>
    </head>
    <body>
        <?php
            include_once("includes/navbar.html")
        ?>
        <div align="center">
            <p>
                all default values are set under settings and can be changed there
            </p>
            <form>
                <table border="2">
                    <tr>
                        <td>
                            Material
                        </td>
                        <td>
                            <select>
                                <option>PLA</option>
                                <option>PETG</option>
                                <option>ABS</option>
                                <option>PC</option>
                                <option>Other</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Grams Used
                        </td>
                        <td>
                            <input type="number">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Print Time
                        </td>
                        <td>
                            <input type="Number">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Post Processing Time
                        </td>
                        <td>
                            <input type="number">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <input type="submit">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!-- to show -->
        <div align="center">
        <!-- to hide -->
        <!-- <div style="visibility:hidden" align="center"> -->
            <table border="2">
                <tr>
                    <td>
                        material cost
                    </td>
                    <td>
                        processing cost
                    </td>
                    <td>
                        Total manurfacturing cost *
                    </td>
                    <td>
                        Suggested Sale Price
                    </td>
                </tr>
            </table>
            <div>
                <p>*This is what should be listed on store as product cost (with addition of extra parts as needed)</p>
            </div>
        </div>
    </body>
    <script>
        
    </script>
</html>