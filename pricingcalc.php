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
            <form class="pricecalc">
                <table border="2">
                    <tr>
                        <td>
                            Material
                        </td>
                        <td>
                            <select name="material">
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
                            <input name="gram" type="number" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Print Time
                        </td>
                        <td>
                            <input name="time" type="Number"value="1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Post Processing Time
                        </td>
                        <td>
                            <input name="posttime" type="number"value="1">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center">
                            <button>Submit</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <!-- to show -->
        <div align="center">
        <!-- to hide -->
        <!-- <div style="visibility:hidden" align="center"> -->
            <table class="pricetable" border="2">
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
        // get data from form
        $('.pricecalc').on('submit', function (){
            event.preventDefault();
            // remove old table line on fresh submit
            $('.pricetable').find(".output").remove();
            // put form data into array
            var values = {};
            $.each($('.pricecalc').serializeArray(), function(i, field){
                values[field.name] = field.value;
            });
            // calculate output for table
            var matcost = values.gram * 2;
            var processingcost = (values.posttime*2) + (values.time *2);
            var totalcost = processingcost + matcost;
            var saleprice = totalcost * 10;
            // output data to table
            $('.pricetable').append("<tr class='output'><td>" + matcost + "</td><td>" + processingcost + "</td><td>" + totalcost + "</td><td>" + saleprice + "</td></tr>");
            console.log(values);
            console.log(values.gram);
        });
    </script>
</html>