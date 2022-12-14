<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/css/core.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="wrapper">
        <div class="newsletter_form">
            <form action="" method="post" id="newsletter_form">
                <table cellpadding="0" cellspacing="0" border="0" class="tbl_insert">
                    <tr>
                        <th class="full_name">
                            <label for="full_name">
                                Full name:
                            </label>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="full_name" 
                                id="full_name" class="fld" value="" />
                        </td>
                    </tr>
                    <tr>
                        <th class="email">
                            <label for="email">
                                Email address:
                            </label>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="email" 
                                id="email" class="fld" value="" />
                        </td>
                    </tr>	
                    <tr>
                        <td>
                            <label for="btn" class="sbm">
                                <input type="submit" id="btn" class="btn" value="Submit" />
                            </label>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>

    <script src="/js/jquery-1.4.3.min.js" type="text/javascript"></script>
    <script src="/js/functions.js" type="text/javascript"></script>
</body>
</html>