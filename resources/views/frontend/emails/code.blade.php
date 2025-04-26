<!DOCTYPE html>
<html lang="uk">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email google</title>



    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;1,400&display=swap');
    </style>

</head>

<body style="margin:0;padding:0" bgcolor="#FAFAFA">

    <div style="margin:0;padding:0" bgcolor="#FAFAFA">

        <table width="100%" height="100%" border="0" cellspacing="0" cellpadding="0" lang="uk" bgcolor="#FAFAFA" role="presentation">


            <tbody>

                <tr>

                    <td>
                        <table width="100%" cellspacing="0" cellpadding="0" bgcolor="#FAFAFA" role="presentation">

                            <tbody>

                                <tr>

                                    <td style="padding:30px 10px 30px 10px;">




                                        <table width="100%" cellspacing="0" cellpadding="0" role="presentation">
                                            <tbody>
                                                <tr>
                                                    <td bgcolor="#dedede" style="padding:30px 20px 50px 20px; border-radius:4px">



                                                        <table border="0" cellspacing="0" cellpadding="0" role="presentation"
                                                            style="font-family:Poppins,sans-serif;font-weight:400;color:#141414;line-height:1.2;font-size:16px">
                                                            <tbody>
                                                                <tr>

                                                                    <td style="padding-bottom:20px">

                                                                        <span
                                                                            style="font-family:Poppins;font-size:36px;font-weight:600; color:#27ba24;">
                                                                            FLEXY
                                                                        </span>

                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td style="padding-bottom:20px">
                                                                        <span style="font-size:20px;font-weight:600; color:#141414;">
                                                                            Підтвердження пошти.
                                                                        </span>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td style="padding-bottom:10px">
                                                                        <span style="font-size:18px;color:#141414; font-weight:500;">
                                                                            Код підтвердження:
                                                                        </span>

                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td style="padding-bottom:40px">

                                                                        <span style="font-size:20px;color:#27ba24;font-weight:500;">
                                                                            {{ $data['code'] }}
                                                                        </span>
                                                                    </td>

                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <span style="color:#141414; font-weight:400; font-style: italic;">
                                                                            Не звертайте увагу на цей лист, якщо ви не реєструєтесь на
                                                                            сайті:
                                                                        </span>
                                                                        <a style="color:#18b2de;" href="{{ $data['url'] }}">
                                                                            {{ $data['url'] }}
                                                                        </a>

                                                                    </td>

                                                                </tr>

                                                            </tbody>
                                                        </table>



                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>



                                    </td>

                                </tr>




                            </tbody>



                        </table>

                    </td>
                </tr>

            </tbody>

        </table>


    </div>

</body>

</html>