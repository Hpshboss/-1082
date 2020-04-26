<!DOCTYPE html>

<html>
    <head>
        <title>checkOrder</title>
    </head>
    <body>
        <button onclick="refreshData()">Update</button>
        <div id="count">Update times: </div>
        Data
        <div id="data"></div>
        <tr><td></td><td></td><td></td></tr>
        <script>
            params = "var=";
            var request = new XMLHttpRequest();
            count = 0;
            request.onreadystatechange = function() {
                if (request.readyState == 4) {
                    if (request.status == 200) {
                        if (this.responseText != null) {
                            console.log("onreadystatechange");
                            document.querySelector("#data").innerHTML = this.responseText;
                            count += 1;
                            document.querySelector("#count").innerHTML = "Update times: " + count;
                        }
                        else alert("Communication error: No dat received")
                    }
                    else alert("Communication error:" + this.statusText)
                }
            }


            function refreshData() {
                request.open("POST", "checkAllOrderBack.php", true);
                request.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                // request.setRequestHeader("Content-length", params.length)
                console.log("send");
                request.send(params);
            }
            
        </script>
    </body>
</html>