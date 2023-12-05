<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        margin: 0;
        padding: 0;
        font-size: 12px;
        font-weight: bold;
    }

    .header>div {
        display: inline-block;
    }

    .header>div>div>img {
        width: 100px;
    }

    .header>div>.imagen {
        text-align: center;
    }

    .informacion-empresa>span,
    .datos-docificacion>span {
        display: block;
    }

    .datos-docificacion {
        width: 250px;
        height: 80px;
        border: solid 1px;
        text-align: center;
        margin-left: 150px;
        padding-top: 25px;
    }

    .body>.titulo {
        font-size: 50px;
        font-weight: bold;
        text-align: center;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }

    hr {
        background: red;
    }

    .datos-cliente {
        font-size: 15px;
    }

    .datos-cliente {
        margin-left: 50px;
        margin-top: 50px;
    }

    .datos-cliente>div {
        margin-top: 15px;
    }

    .datos-cliente>div>span {
        margin-left: 50px;
    }

    .datos-cliente>div>div {
        display: inline-block;
        text-decoration: underline;
    }

    .datos-cliente>div>.dia {
        margin-left: 5px;
    }

    .datos-compra{
        border: solid 1px;
        margin-top: 50px;
    }

    .table{
        width: 100%;
        text-align: center;
        border-collapse: collapse;
        margin-top: 5px;
    }
    td, th {
        border: 1px solid black;
    }

    .table > thead{
        background-color: black;
        color: white;
        border: 1px solid;
        font-size: 13px;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .table > thead{
        border: solid 1px;
    }

    .ocultar{
        border: solid 0px;
    }

    .table2{
        width: 100%;
        text-align: center;
        border-collapse: collapse;
        margin-top: 5px;
    }

    .monto-total > .table2 > thead {
        display: none;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }

    .literar-total{
        text-align: left;
    }

    .footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        text-align: center;
    }
</style>

<body>
    <div class="header">
        <div>
            <div class="imagen">
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANEAAADxCAMAAABiSKLrAAABIFBMVEX///84GQ9yTirk5OTl5eXm
                        5ubj4+Pz8/Pw8PD19fXr6+v6+vqFYD38/Pz09PTt7e0tAAAqAAAuAAAeAAAnAAAhAAAYAAAlAAAd
                        AAA0EQAXAAA2FQkwCAAyDgCDXDdvSSJ6UCRqQhNmPAB/Vi01AAAAAABoPwvY1NIwBgCxopYQAABt
                        RhzOxb7Ev72bg2+tpaJ+cWzRzsxxYl2LbFGOf3jAtq+mlYi4sq/HwsBlVE7U0M0+IRWWjIixq6lX
                        RUA6DwBBGgB2ShechHBKMyyCZEmgmJWQc1ptXViunpJuWEtcRDg8CQCek427r6V6Wjujj39CIhFF
                        MCxJLSFfSkFaPCeEcmh4ZFhIJg1RMhxwQQBFKyCCeHdbJwByUTRnWVaNhIOxCk+VAAAgAElEQVR4
                        nNV9e0PiutZ3ENKmqW2530EEx4pyVy4iOqMI43ZEZm/P3mfP+Jzt9/8Wby4F0lKgoPOc5+0fw6hh
                        JatJ1i2/rAUAACgAMfnAMIDIRwAGdAA0PwyoACgB6Ce/kwMQkg8jEDDIB4QBmXyQFgoAKmmhAaCT
                        r9lIKZJktSCk/AtSaAUpdU5q3pk4qgUpTSQltIDWuMEv4gibefBf5MjvZ3/x+9l3A376Fykg0U78
                        AYly5A+wTvx+NoyAnw5DCtCBqqQh7YR8TSAFpUKZtVA4Kd5CYi0YKbyCFPlB9wcCvDPMWyDghRQf
                        N5AAQkhWFJ186Ioikw9l/sH/JHzovKGytiFroY0LprwtqR07c4wbBDjzhMNl5q2VYXuP80kL8LUj
                        vkcoWaRAu1TCM1Js0niLAJ9/v4OUuAznnSmshV+cf5GUf+W4oW2B+q0FGnBb63wYjo3FOeJr3XhQ
                        GSmICvmaMSPFh2HfozZSdo5mnSm8Bd82gSVS9j0qjhtjqGiaCjFUNU0hH5qmyRBj8mFgjMgHaSGT
                        D8ga2lsgjA3egjUMNDRGCj3k82WDNUSQtViQ0ld3Zjg7sxrqvKHVmcE7g6tIuUgGv8R2mJ9JBvJB
                        36PkFyWDX5KdLRTJ7wfdgcJIaYX9UoW3YNvZz7Yzb4g4KWs7B1xI6ZJflAx8VK6k/CKp2bg/VHp/
                        HSmMVKW0XzCXVsZ/T3pbvHLpLVm71z5H1u4VWrA5io34HNXy+wU/byGIXCmw/GIDLqR0v9scbSQ1
                        nyOMsa6qKvlQVFUhH+QHma5YVSULF6kqXeGylxZa83Sk0haotL9fgOSXvAVpyPYRaYE9krK30LE7
                        Kfdxk8nyb5J1ARdZNxe5gqwbRQaEhhYwC4QjIvFcZJ0lvbeUdZb0tsu6wKpxe9ZHcyXixhFbGY3E
                        BeUIkm20X+pDTsqVI3dS9s6W9ZErR8vjNgyDzJ5CPsjs6eRDVVTZMBD5QPyD/E6et7A+ZN4QzRvK
                        qgKGwVeyOBTUphxVkCdSihsp9id9bWfqynG7SAbLPtpCMvC3ZMSzLZWSYhxNgNMYc5UMATfJENgk
                        GfxukmFm132c9DaTmUeVkqIc5af/Vek9U3qSKAW31bCwF8tkZPpi6T7az4N3aFi/OEfSSg0ruUpv
                        CCFtGuBTArkFBRnzBoT8PUJ53oK8xwB9j5C/R94CE0sOgF7CFyE/qUwykI2EBVK8BSWlLzrj5pqd
                        FO+MLBSozDvTeQs7qYDLuGXWArpPp2dL1WpBOmlHfbEmlXVUeu/na2iTpbp5RXu2VMVxB2a71016
                        23evizfhF6R3N+oL1Wknxj59CmYAuLgAugspV2+SS2+bNymSklaOW/6oR72O+nKXGv3fNE8n6Vz9
                        MNrbPGDFe9Q8vUdVeI+YzJEvBikptuz2Sx20cf7dvUm2DImqkfn+WuOVY9tSEqT3+9e6HsBEMvii
                        15iSOmfrrjRFcMs9ShcqMMxqdzS4eH19vRjUr6umxkflQspt3OA98ihgk0dm0keWnU5JVQqcpbGp
                        OUmtkaOaIcN+vfE9nUxEQ8FwNnsSDoZCiUj8ZlCVZGMhae0i2TFuKsZ30BmywytjOuPU5/PFJdqQ
                        +hP0yZceJAMv6wwXXYcwatYvY7FQNuNzPqlwInkzMhFnYJOC2kJ6B1YtQ0trD1M+X7YFqObX9jlL
                        hKdaRWWvE82nFUC2NGVJJNV8S0VCuSVmFlyFkjddBSwbEYGV0nsr20t2s73ewqTnZA9TUri0vz/j
                        6fb8YVIxoUaDGsT70f2Vdvmhtjfh1rkcwHJgdJUML8+Nk6nYl+7c/FxtMyqu9rEiGLXu9rEi2sec
                        Ri9Gus34yNeQIUv5/P7+gqtSoVBiMp38p1AqlW7HksI6Qxqq38SDG9lhTyY2bIJ1LgIZlYus28KH
                        Uec+DDOYQ3RcJ18ZKVmtFfZXPPnCeQUxyWCgaiseSnlih89TuqHNpfd83IYw7tUcbednMo4GQdpp
                        tGGRquRLbuyUCrU+7ZOQwgNfLOudHfYEfSbwO6S3jSPVswOv0ogZ0tbEAuAp6zP6FSFKCqD2OV9r
                        Ijvn5QDQNIR0vXrpdbXZnkz6WjFWxzAIa7vEa2TXeA1qhFmfYfIarYZmuZZnG4fupPx5p00JS0QM
                        m2+JxBrRtvZJP60LDn2g9PZDKWq9xnhDQpg1xMhQzH673a4QNYIwNSKA3hwQ2bYjO/RJDtZIb1cN
                        699Ww1pxT9yNWH2epFtVA8w9fss6Y4qIaJ7YLqvNxtIIrdSwYkD5/bFptRWcdZqLhRrXJp0SIlfJ
                        vxpSkNEbXUZimzXP5ifdBSvG7SLrdjo/mJ3xGUNBdmWjkdCwcTGq17vd+qDxmI0kghv3TiYXDiWS
                        8Xg8mUzGk4nQiTv/cf86S9XNm/B0xmPTR35uPP5uF8eZLDU3o8T0zKY2zk0mG0pmLt/qVclgWl2X
                        mvXGMOYmQlJDd2/CDz76HE6WH0ObBu7+pILJLFmnKhkSVf6sM6IdiHjutpKhpbcRHWiu43bYdW4H
                        nB7sOpujbDQibgNe/2SjMWJdUxHCVjS3ZenhFvlXwSgwyi69p3TAfdwfKr0ZqYB8nTjZjp1YrHUt
                        MYeah6aMyqQzrdVq03JbYqMinQ2SjmkiZr536W0L4K2Q3iymJrnG1DBqxL1qz0w4Fmv0NDIa1hlG
                        Znu6T1Rynj+lQr7TR5Ap6yuHCktL7uN2MiBtF4HU5md8Fk22WeXmZdLDPKWCEd9Fky5b1hk0+hOn
                        3cTs2j598Sr4GnVMkuESOeXS+8MRGgGomo1IdN1EZcKJ9Muoj7TFip6MC2627f5+YWxi2tnXoI1E
                        Wlp5xscjo37IdwNUF4LAztEsOCBsLI2zogRsCA1mRGj1y3gi7OIqEJWTiF9d9BQyGkvqQODvLM2O
                        OE9tgyrroe0dBUdoIcBEhIYO5F6Xhlz6VARqSrPb7ROxqSBsIGom0H8DGNH/z35DH/oH4WcX0AQR
                        xNW3mxhRk+Fsij65bDgUjaRTl4MqBqoyw3DImloZF5yLLS/6jPuFB5U0NBKieMgMNVeEBlQu4o16
                        vfFH9w/y3o1R9KI+evnWJnNRfwmGf/vt5eVL7LH6eHT0G3k+J3+7fjn6TH7520s0KNV/C3/7jTYJ
                        ptWZ9LYdUulYxma1/vbX5Q15/vnrbdQ1ZfImwEJ7Q0Oa7JdsHi+x1se1u9o4L0xb4QERhdqNiZOU
                        lKALQgObn4dk+rGhPAaJGff4GREFIHfTF8DA0tE30g4p3UdgHv2LHTY9/Smb3y7p1ALwN8bm0R9k
                        UGRmH2XLLHKNqSF+VEUmVAWOELpauROnJ1/I37UlCXHv2l+Zzv9YmNCw0o24ikN17IbQ+Dfhgdqb
                        mhrD+kvUBBRWoYzCI+LMhb8xNaf9STmSKUJD/hNJ4ReNYSFGEpa+fecoj2sJQBewxxyhAd2sYAME
                        bNND/cE+jxZZpDBAnZl3XzCJGGmK6jvXkl0QGhffBgbfznggtY9aMpeC8CgIgRr6bHDpDftHf1Pp
                        jYBMmLuhL5DBgOSj75i2UCVpSTKsP/SBMpDK94Jwyxf2JxQF4UBoQMO0NlT+nFCUfwo7KXMiSIaZ
                        9FaC38xZbNKUHr90MZeC6LcvA6BGP9Mzk74MYf/b3/TYjUJJzG8vlCPYxQpAR98NGuasYgdicP2J
                        CPEEm528jZ37CXESoagq5uBD9ZyzVKhgiEeiOXQqL0vv3ufPRsB6sZDsGxNyXvHgy7+AmvhMo75/
                        kXXa//YvMgzlL8rREeMItQyVzhHb5i3DvzxHFrLA4TnTgfaneWGxkdnpSLwhcEVoKNYkjcm3paTA
                        Uay/PEf1L/+m0RNsYGLl9o+OTI0HSsgfvuj46MtoNGocaapmHv1N/tv6m7SUjoZ18v+XFtnpEvv1
                        6OsjsGioCvlgoRQDV0x6wkDxF1Z0g8bZAGzfCSKMCLb9MllssmFDaBi2qAzq8710S/akciUsu2gX
                        CX1yhMaIcDQXuf3PR/2ZzOh++YJh+Eu1ev10pNGJ+bvbrT79m6wJKfxYabfbF/8QlSt9/l4hPwwe
                        wRLEgCyyfq1TYSqUuJvMDu0zoy0/5+Z2f9o22SQ7vMmAHaGBeCCd4qf0lqBlQyNsRzyQ9Tr68mXB
                        kXT0uTeT62TyZEilN0YXKmCyjrT4k+wD6egS0K3XoBxR6U0kWAMAV31Uuf+xf/cwIU+5c3dfKpXm
                        8fBC4fyhjehBgweEBmZnu/ulMhncQDCFgnaOmD6qfv6GFqCJb1+6GoNEIDD48pdqHB0B1UB98ifz
                        27+I96X2iXqk0psupqYmI+nou6YSbdMkk74MmqAOGxFot7c0vsUlFrOnS+dkahRVRqqFv1B5rFcV
                        MBw2hAaS2LLLdzRVqYfEOZKFzjhCQzv6XIUzyaA2vgwM7pXLj0dVIhm+Gdax21x6g4X0Jg2Z9OaL
                        TFqW3uxNE5+jUr4b79OId/6c+DwV8gWiR7ZCaPCNlJ8SVXEdEveRC0Lj6duLzuUkrrZh4jOX3sAM
                        k61BZB2yLNX+0b9mK8PiiBi2F5oc/BuzEzFjYK6W3sxrwewkiYZiwWpvchVCY8JWXb6M/UBcdYme
                        m+39eHShU+py808V1EMXOuP1hUg9omGPkF3Dco4emT4yeg2Agn8j2r/W/M0AC//IK6zCM0LDOgdt
                        k5XQEkIzSdMVofFb4qUnGeZTg+xSdJ0mckAxH79jYOjVo5BpnSxefzuik6AGsFL/9q1HnuYo3lO6
                        R0c9k/xQT1TtsIq1J4sOWMVGhAYqc118S38SQ0pJV4QGBM3Gv0OpVpPpdSw//fHHvy+vKfXOxdPT
                        xROxbxX49DYYXDxRP9N8or8lz9vgSepcDNj/yaOuwO58AELDaHN1xMBGPcH6zvyUl+0RHjkBSKYd
                        E7+Nzrumy+xwB2N9IVD5+ld5lMbaDZaaIQ0VUXq7ntDvjtDQypatWqDtG4K3f/JqLHsTxJOTiUSW
                        EZZ1XcayTCxss93uE39MliGyfkd9KYSRrkntil/TiQVGfAz2W1n/pXgLRdH655b5VyqrsuKPC0ZQ
                        oqssIzQqd7e3xEgkbsr49paeAuN2odZuT3+UscZ+Nya/k2H74UepbfrH+5Py/pg4MJX929I5fX7s
                        GzsgXVzvTWh8/SkzYBOdf2lyP3OQ8mNCCl2KfnnUHaFRKphsCcFCiVKf/qD2NTAL56QTo1Cy1ro+
                        rgDlfEy/VP7RVkClcMfOPOV9wxY5cUcjbYgFUk+JLOh+v2KaZr9SadJ/J+XpWDDP8+ca0Iy66MNm
                        G/LyHiX/zRckLo8YR+XbCd09Gq7c1sgwCiXMhQiqmaD/o0K/q98RjvqFmsF2YAevQYwFBMSYO0KD
                        OLW6OenU7gvWwdnisQUaSmPq/fbENeeLNxdYOAGhYeQLBtUZfqWQVwP9Qn6mM84LbQjJj5bOGPfJ
                        epww/EW/osBKoca3s+oN1eeGRiQvAVeseOP+2id/WyakcDMqBk5yl+4IDZQvYBaeoxzhaWk6WxmT
                        0hhRjqyVQTgyC4U2ImtHN2ccERPSxURYiby0xQI1ZFIfdgMv3H86l2i8oxqxBYrTpjtCg80RnTOV
                        cITypfbsjK9fKvgZR3z3jvsBcFcq1Ey2ezhHxCGZgk3oWBFFI6J6xYBWfva4sFMq3FXol9Un0dcj
                        dvfrCoQGyJfofiRPqaRot6W2zJEOiHAk6WRvcfyFUjNVhGqFfKFjkBZapXQ+KZfL5x15JYaDG+OK
                        K/JardzT2aGGeOF2/3x8d9fpdKZ34/P9W2E/kb+dd9oG8SaRat4kbAxlThBagdAo5TsPD2RwD3ki
                        GQhH2MIzNMkcqYUS5FrQIJLBCKDKfonGN2UiGcYV8tw9YNuJmFeU+bhAIz+lcblt6vRc0zpcYWrb
                        7Df71I1sV8jmI0Y6XSFmI+0Izp6ayiqEBpkKzKzMAuNoMuOoUirIM47ICBlHZKATMk0TJusQDSc/
                        4AVCY1l6r7gJUCnkaeRHmh2e2wAultiUBWnYbC2dC0TqKxEaVHobDOlQKOlgXOogjtBAxG2k0tvg
                        Drw+NvkZLjDO8wVEBlWTWWjCMBa3NTQvYA9D6ZCXMjWJb7bqlgkjxTGQCu6+pSJLwJTYKxA70wSE
                        BpXemOl1KuvgpHQ+22EPpQ4mf1QsCP6zCc0+9cogeQd9PJfeQNv2Rs2UyBe4jPfnh2uYRV2JyaXI
                        Uq/+1rpKR13O1mOv8mqEhk16Q5wv+C0puF+SoDImBgWX3rcYmg/cYH64NS2O6IRPt5TeD4VS1dBE
                        25vZvjqUpEq1Phq8vbYuH39PxeLJWCjsgh8kT/JtAfNcPuNDCw1bIuZ783YMGLK+/KMC/XLldipT
                        7xtMpzhg3iK65MF4X4E9yhExAPRKeaubaWrldixhEc1vkMkYNW5CsVgklgiFguGTbC6TWXOunknX
                        16pzeFto64amkZ1xS1QWUUNj8ms0va2Qda6g6Y87qKL+mJiJwPxRqChA6fzoK4BY+H1qhJV/SJgj
                        NPAS2MMlEE4sxTEC8xaGjruN7/FEKOsdkRbMNGX7VUU7QqNN5HanLAFlQmR4Z6IS4TIZ39+fl9nB
                        mBowKnd7e3vjNguZVMyH++fnqYT7RBc9dKYPROw/YI+WKpd1d+eGEGeofo0l3BfWqid12pidaqxG
                        aChz941BHPgZH7RORJjtrxkzzxmxD6b5raua0KaP3LwJUR/5b+HM9kagOYxsCd9KRW7M9Xjvj0do
                        rL8prd31dauFglvxLcCP9DlJ3/S09Z39EoSGK27eIiVNtRmpfowpzUzuJBgKMYGQS62RB5mTRKLR
                        BCuQt78WobHu1tNEskQu6J6S0WcT6avL18GoXq8/DV5bL7+nIpEYRa/nxIBPKhuMpq8aXYzcOvtf
                        QWisJAUrkPtHRvfUlwnFG1UdaHwXyzz6As1e9Xp08c/N93CaPqfp9NFNa3BtAK5TvMQCN3hluyE0
                        NvUqxX3hYF2bn/6LnakYczweMdl1jW4+tvS9epPAXa/PptNDTG1FVpD1Z3y+TLKxOUq83Yp2wdd9
                        YA6NDbt3EE1fI1dS4P9oDo0NpOBprKlt0gyeSP3qHBrupASVa2nBt09d8P9HDo3VCA2bpQJOR+h/
                        OYcGmkGH4aYcGlDMoQGZQ6oZFl5Eph1rskyFMrURAPO+ieSqPiouOGW4MYcG/N/NoQGtGEGz2u7W
                        Ly4ajUbr8vLm8fHy6z+XX1sXF4PRqN5tEv/fUBsK80PWnB/9d3No8BO8QHX01rpJpJOxRJSYNCfZ
                        bDaXy1G4Fn3o/TWKKI5F4vHk56vW66herTAVbcUZ/i/l0ACyeT14PKGIs5xHw5OZcolYMjz8+jZi
                        Fw/JWvu4HBpkaeuqA11BkQ7qIq2FYQNNWC1osIWo924jHIkGRSssk0nxZ60farEWDiUiyavWoGvK
                        iq4LoRQn2MO6yqLOwR541biXpLdbDo1VGSeqrfjCX8tkg6FYMh66GlIk3cvNze8/c9F0klme68Hr
                        mVwwGokPG6O+TMNdu2WceH8ODYzqvtjcX8tG46nG4LpHjykMCr2j4RyDHhX0q93r0Z+Xn+mFgeA6
                        dzWTDcUiPxv1prY7RytyaFhIBxfQhJBDQ6meLM4JQrFWF9ML3UhZIkVUOxXiRIL1rgetn4lkNJhb
                        4wURtmJfR6ahyo6EHfPh8CwbrnCQ9+TQ0Abx+bBSsZECVLjJruMnuJrZHbRS6dg6tnKhSKh1bcrY
                        WCUZPj6HBrpYIBFzQyagvNreOj2MlpujVi6WCK4WjoSrzFtvZ+ntmotijYaFzcVRWybD0dHb+UcU
                        uCpVBzfxNXerMuFYotFDCP66HBpMZ0AKmnhbAFloSgZbWgvPCA0ieWWlNximoyuuGJHnJBa8MOm3
                        l0h9cA4NAVNA02bAdStjE0IDSN3G1eo7sZmTpG/EnNRfmkPjSZij62VvYjuERgAjII0eT1czFYo0
                        JO/Igp1gE2Z60d1QezcMg1BUAa6/RFYydZJumWAZjeH2gBXvcX0ODXSxOEGMDtAHITSAWR+uvPOb
                        TbeMX5lDQ71cwPaSXbAx7r2EjnbdoxCjwFMutiJynI2PaOx60x4FLvIo4CWHRmsB/khfM452Q2g4
                        chGR31Uvk0F3nhJDk4HL7aTenUPDuGPLUH5aHPUmG4a+SWd4jgWShQoHieWbiPRJRZq/IIcG/p8K
                        W4ZIGsZm3YaG9iSJnhAa62KBgVHQlafMaQ99dA6NgHlc7FuxoHooNO/pTdsWobE4FFj2Jv0Yj05c
                        b6HGTfiOHBqKkENj1kLrH+4VKxproehPkdmrDNGg72qEhhspR2eKPaGdagySbjd7H8FH59CoHO7t
                        FR+A5TBpo5R1oziTyHSB4hGhsc6bnMVUybq+jC2zlDY/OofG5Gxvb+94rFsxNWB0L9NciWQSV3XI
                        bsVvQmh4zDFpgG5kSedGuwIpV4SGuox0WJdDAzxQjvYOjiu65eIjRXry8Qv9mVDojV5S8UZqRToO
                        eQ72IKpb+ukEm8SqYBkOor0jhwa+O9hjz/FYmu97LDfffEk2U+HTly4D8a6L13iMM5FRQe3Gca83
                        wef/43JoGDWLo72DYq1izE5EyEDNwc94KEuctUTwzQQafI/0XpzkOG+Mput4lzO+NTk0jPGMI7r0
                        iqbgOWPZvG6FYqFcJpy8GjUZ3tp9jrY4bdMAElBomTRNq7tew3rLoYHn+Atwv7d4zqZgEZsmLYh5
                        jJqjr6FIKBxKDgdNmV41cSU17wxvzEstzy9KZEK5qiyE59+fQ0OpkikRGNo7Np05NPjBXLPeCKdj
                        yXSW3oGfmZeeZZ3t3AMHYJPL8FQ0McLYTmqVpeohhwYZaPM18UlycLSUQ8MiReaSTFbr6vTTp5dR
                        06B01+kjm+uiO86moBmhkZT4TZcODoIO+gCEhqJKA18knEkpsiowdFBzOambk1Lp/b3m9etN8tPl
                        qK8ARZd3Oj9U68lY7GtdAippoUrn/6Pqa84PPSE0MOp9ZaI5MyTbZiEY9s7KWDwrxfxGspX4wppd
                        bMhANutvX/8aVLF1t2m7M17pctSzhIwBysWDovFehIbc/cOC7+QuiT4SODqs4AVCA5fPz4rF4sF9
                        7aGNWdBIkN6IhtgNs1sxlS2lN70JgnlqVozaB8QE20PvRGj0fs6dhpNX+xwVpcDsRETpFM/4Xw4O
                        zg6Le3cTk0tvO0KDY6Rcpbe0CSuhtp+PKf1zwztCY1lngOZQSC8SHJAdfyasOm0+rvPDPdtzcHh8
                        Vis3WQcfcUcMYs4P3bwbIpBgnV7XGnHHVXuRo4NnMFsZUwdD/O9nx2fjiakiDD1jjrQl6c2GAzsH
                        sx7OHtZ7k6L0diA0/KAXtDv8oWsixAWTYQws60wqujA04+r4nmVE07jE2L7KCazU/lNcvMfDya4I
                        DVVppO2Ocea0quqC9D6Yqry9WjtwYUbg6rB4OO5MKiZmxzHesHvzUanlY5HaYU/fEaFhDO1ecTby
                        s64SL3VB++xBt7TgsZMJN7bODo+Lx4T1B+DfrsqJ/X0dm3AnhIbct+2gTDDS6tGuVPS84KhscVRx
                        20WrHmILbpmlzP794wDcBaGh1+PiYXEoPDBkbk2ihe19NlEgpCjk8plz2OsmawxcM8kxUi4IDWAU
                        bd9/lilCA2yH0FBAPS3wEw2NsDHX69MFRw9ceuPp2m20NElCShwPCA3Ytq2Ag7tdEBpgJFwuC4bq
                        1ACYr4zpfEI4R8TaHm/F0bHpUXpbd8M7thVwNtkBoYHqC4ZypzSVgeg5L5bYWYfPEbrfiqPDtjhH
                        G6ucOKjT97EtQgNUTucMxV4CwI7QQBOBI4WhJcB2HB3UdCfYYw4HUZfhIKhon2FobI3QwPPLZblE
                        dyFQLZErLOuDqRWe246jvcMAFGOBrrJuLr2dgvRZ3xah4WcpoK0JkvRljpoLjsYWR+dbctTG3quc
                        gDsb8bMp2hahob7Nc6KONLSM0ECCxfOsMtAEWG8yLD0H96qzYIoDDiLiL+xTdNjWt0VozA4kU6Ee
                        AK4xtQVHh3w7O6TR5qcoea9yYpfde0Vza4SGteayVxJegdB4ns9IETORi7fSsHvMIfAsvR0r+tnY
                        FqFh5R4L3kC4Kqa2WGPHfdYCbmUF8UkyPPpHDqv+bIq3RGggDhsLvvBbOW4IDfywEN8Tnn+l78FS
                        tU/SPQCecmjIjiki73A7hIZaZ/HL8IstKZEdoYEF8X3H4wzSthztHbc9xRlg1UH5cFuEBhjSKcoN
                        OWzFHaEBxRlBbPfK2zJEWMIecmho0PEtsgG3Q2goTapcM2G0Hgux2DVFyDJobPD43J6DZ2Vz8g2t
                        5hA5h+3NKA0uvS2v3HilhzWRproeobEwEQ4rvMVkS2FHnrNzBTi9cntM1Y86TolTRHArhAZENMwY
                        GxkbEBodwbLjfpu59UYi3x0v71FbZ+hhiep/GgguS+/VCA1ME9fkXuRNCA1BNDxb4LPi9hyRWVIt
                        jhzVoqx0J9Mlho7NHoMZrEBoBJYRGjR9X9LYFFPzy0WhD7adjS0tO+t9HFScum4egcTmvctKRkC9
                        rBpbIDQuc77QYC4FV9/jE0INE+aQCjpqq6c4la08ys5ULp3j5Xd09kA7e3uTvSM0QplMavlgbtn2
                        Woz/4J5Z53BrHTsbZHFq8uQMc+lNFKfxcOj2hoosaa/cvVSAM5K/AqEhJSlG0waacIVVyJXF+IuQ
                        XrdTtV1WHefpeG9aCRAXDmgqvQejmJPzouuM0/AwHY7mv8HIE0LD6CV8MU9VTvCiR2IIMR13tzNL
                        LEZ+eH/XmZQ709rz8fHZClJFc+4O3TSxIKNXIjSMbjT85qnKiSFo1GeZdbK1serk6uCMPAdr3svB
                        +SKsiC67qzlaIDTkeihpam6wCs0Bq0CC00KkHWtRfB9Hm59iHyySdyqtLlA3IjRAPfoTeatyoi42
                        ElGy9PxoB0Nou+fgXrGFrBoDYyNCA4xib4aXExFgC0UTR5bmpX3vsoDFtVoAAA6JSURBVNv0FE3Z
                        5uChV6pn1p/xgdFpFXqsciJIu8M2g75oO8pvj8/B2HknA7Xe3JElC6SDPPpE6/jQfbQCoTGvcoJt
                        8QwKmtDRr112RRMvpeP4502xgz2cCA10nVTBWoTGIqamCsESFiPVYfWDl51N7p1NjWVgmzocKCss
                        Vb8lvf+wLjNtrnKiwOKiu2fmAhi7GUKuzJwdH9yPx/eH85d0JkGX4yIcGjmltw2hITf/UT1fuhbj
                        qMcVlvJ+2xjXquesOJ6YMiue1bZIHrcVtyM9WfrUBesQGqgBPOfQEM9ADp4NulnFadv9OdwrIzDL
                        o40lDk8cG8B54MDtut6nKl53xvekec+hgUSkRhvTTrYMf7s9x89tpMwta9WPmVI4lKDg4InoaHDx
                        yXKY3BEaXc17Dg172JFx1H6vbDg7qBjQjtAwyK+LVbjytpbxM6GsRmjAyja3sAW7Ye9wQpNCgfdt
                        pINih+ED7Gd8tYPDDljj4EmnQ2P1GR8UpeBG7I4oCQ4hjQFuGy22PWfPpuGC0Ogc1xbL0A3v/xRv
                        II8IjY34KmGSDsaIuB3vMVeL00WefDGSP73HG3JoZJJ1BQixoDXZKjYkPNJEV7xIJDh6h7lanGhW
                        L7SqhUb+w0eldPQNOTSUajJpyh+TQ0MTJcGBBiTY33GSDo5NnXeGjGb36eLtos7QWn62rjbk0AA3
                        Jz+ND8qhMRFYOqvRFObbnZrPGdpDVmfNRiwWDYbD4VD6bd7ZhhwawEyGGrK3HBqQYSFW5dAAGviP
                        MKxihZiMO0VQDp5lmqvMULpXyUV6xMSLgFOGtBQmx3DwHBoiQgPcpOJV40NyaMBKUWSJ/E3dQcue
                        PauQdtb8aSsF5Is2WBx5cw4N2E1kUlRtfkAODdsJLIXbiWEirzN0T0nhJaSYz3fadJoIK25roZNM
                        6A19TA4NWRQOZCshY9tJOngm3UhG07d8d++kIczRuusdeBD2xZtwbQ6N9aCJRQt5Is7JcRloZnE7
                        hvZofSvQXZogeo51o8xzaKiLHBoMoaGKCA3NTPpSN4CP6l05NGgSXJt0K1YA2ErcHezJSiAgjwRg
                        1SLNQWyEPWacAFcZeovnfTk0LI6gZDNPi+Z2TsWhQa9tDoQqTbnGo3XzI0Yr3Xjk6PXEl/FZo9ox
                        h8YcVqHY5B1laerduiuamiqrT2LZqdQlGCVTvlQoUjfehq+ypxwaajVKxH1dfUcODcEFNOwnccUm
                        8LzsiiahqFZtedUzKRX1honhCL6mg6nYAHnJoYGMND1tBe+X3uyE3mEoFPtebSGy64jJbtoY8vki
                        JqS2qcyFX8TvLYcGhWEkrt0QGjtkqQrAZztLbW+YyGKb7mLjp0PKpW5kitC44dZD9Bp6KphymSKT
                        9DuwITTgFjk0HMeYdumwd1zzxFAZ0c4u5ojlGWexLuFUtvBWwcHKqgLiuI0GfQGxKt41h4YzV6fj
                        ZNnLFBXLrI76ItPDz5kRRLPF+3E9OdeyHrK94Qt6fzH3FTkRGl5zaCzyqXK89/YWanHCFcEczEdm
                        o8ogPNmIn1k2Aw5/efOU+wHzm3FxCe+WQ2P5Uc3toibFMsu8oV4Ll5LTfYn8FPpHV7ujuqGBF3pF
                        KDRSZZ0eNuprAR3qiHEUqqs75tBwTBpFFJme1tp8hhQ+/2I+rlBdaZxEG0QdJULRxMA0KbeRJtlE
                        ZOuYJh3H6hwavEofMYV2zaGxVNFHh/57z9NExDYnVRfLEwRHhvnpK7DukofjjZ9EWlwh3L4tsOd8
                        wjazO0LDuo8ZxzySvzmHhlt92MDsHleA37U0OkVP/Jwd+GekbCnTcpcyDoBFupEc4xIZi0In+5hL
                        WheERmMm7PH2OTRmCsqWNY/pDKN96GHlHY+5g0cUQc9eNPuUEJFObb9KS6AilIrMA2cE0ho3urSg
                        m60dcmisybSMpVpxA08HxcmcFH6y+USpGJ3rF/HOdbaBNLFMCK3H55ppWbFmlpirW+fQcM2GPbO9
                        AsB8XifHD4pjvCCF/+T5sE+CNHFA9KdJtjXui6VMkqbxYK+87Ijkz/KuzYtdpg33HBrKWoQGmmM4
                        9HnDWZUTWW8/r5qng+K9CfQFKcDUYuZxUB8MY/EBeIqdkkXzdTFJoTcg3c6XHC33lldmo7IhNJTq
                        TMQkqi6ybjNCw+kwaWKVEwOYtePlDXVweFyrLLQ3zyfBTZ2rRk/tXgNalyVSBwvLNZMD4HxeA3N6
                        TlcdFg2B+biVi1nKg+BoNUfb3XqyVzmB7dpB8fDswHrODosHtbaE+JnJghTiYiCTPe1h0GBbIdmY
                        iS2ygnqgUzqfzVG/RKupOsKKM47mRmH2wj2HhrYeoUEv7DtaONJakIXrr0ymtfH9/f14Wq7QaoXL
                        pMAFn6TcJ9PAn6yX7Otauzw5Au1CaWIVrnuoFAo1TUZuJVWM5tz0SP2zdQ6NuQu4KecpZMpO5Xkg
                        jYBrDg3jJhYOR5OXxH6WZwm3/rbqvyYHoH+7X4C8dF1pAqbt5nRacVY8Zp0tss9lHn99nvzAKm+S
                        JaW6fn27lvDLp4Has+WdyaRHoFJgnEilfL4whkBt3+bzt9BYlt6K4DR+3zqHhruG3TJ3sC2JPESp
                        rC9u2irZRjM9wCenIIH+/p1kVCoKrdZZqhjLndlKL7vl0LAjNMgXlxEay/mdsWuVkyVYhUsODVCP
                        Mj9oUYk8nBgBVaZTtJ8v1ZAC4HmhdFsB4/x+qU3PYrAth4bfVrxqk6Xqh7CPvcg6r1VOXHJoXFDT
                        IW5aU5QJpl+x1pkqaFwq3U4nGMrybZ7V9jYK+wVzSdYpr+Eljjbk0Oj1VLeQpOSmjzZVOXHLoWF+
                        orkfmADOZGO5AZKmt6WODs1aGUjT84oCmZrN37fv8mO85E3YrAyyjzyktdCaF7JutUCeMRzOhqtb
                        aNWrZCgYDAcT6VyjqvVpDbhbSafXuWq0PBcGNau6d77Ql52d8ZsRgqzzUuUESzfSzlVOVudGm3uT
                        GJjXg4uLUZUWFqMV+vKlPi1Tre1TTvI1uTwrbXm3ZNehhu2yeK7lTXor2nCE8PurnKw5h5et+t+Y
                        aNLCQ/+B+ndtbqWWKu2Zuao5O8Ndu0dycuG5yknjqo+WpfeWVU7WxQJnOTSIB65NyGK7xaAzM+os
                        jlh9WJt/BPqO7Gk0Gaq3M76Acv1pgPDqPPlz9SNid3byJhVcKzFfSK7NODrnxROxIx2HH0rOhM0z
                        29vTyjDT4a6MwFKUeJcqJ+vu8Smm5UEo9mqQ98i5oqH03ZkMLhIQpfcmhIZy84lWiPJS5cRraRLX
                        HBrQkmydc4GhQk11ktKXGcoM0TYIDRkMTk8bWP2g0iQrc2iofT5Jgj+eL1WAk5QiLafIDQ60LREa
                        zVAiya/Ov6PKiXssUOysUrAVIc3fTtUl7Y2qseWTzkhza4SGchkLxp9UDYpopC2rnHjwJs0aK4NL
                        n1KpcMfuBNlJoaf4Ej++zJW+GqEB3BEaql5P5kKxAZR5lRPoqHJiI8VhFQLYg8MqtKXEF2CWQ2PW
                        GUb+SvmhNh4Td7GPkA2hQUkB1S3ppS80QrsgNPBLIhNMvCED2qW3S578naS3ha+zaqETblzCc9Xs
                        Uu1O+qTV3c74lFEs5wuftppI+xXSeykD0pI9ojfibglxfcG3XREaWLqMZHzZCM0oZ4Hi3OdoJ49/
                        Q5UTALrBsBs/xCORNyE0jFUIDQ10w8SpSSVCA4mCRV0wHHNYhSHAKtaBPVbDQURSGmgOXWQc30UD
                        /R0IDYwv4jnmnl12yeZel9ZiUyxwfQ4NGykDSF+d1YkXgs6nvwuhAVHghr2sXCLWqDIYgas+2jm6
                        ucwR1put+OpCmOmm8k6EBll6Pn50mk2ELohqQ+h9YA/3HBqzFkDtvsRdJZy15hqANXSRDN4RGlir
                        xyx/KxwJNnrsYGwJN7/tKYHudkqApNFVbF19pdzQeE+Vk4XIVQcRK/qXOYnFv16b7Kr6x0hv6wQP
                        KkCjmebXVlPKhKT3VDkR1SKQGvF5RDMXiv+86NEqRoF3aVghx6Ahw24jkthURzZpYkcODfgOhAZu
                        pBcJnjPhRGR4UUW0RNiClLPKidCZHeyBxRwawFDMa1rldwM7RCpUDfCuKieOZShLjYh4XJcJR9PZ
                        Vr3Hh73LqXWAgkdwt5FKhrxU+Y13jRU5NHZFaEDkH8TsqfppbabksDHqmohPlUdkAZ8cqTpq+daV
                        qLF1Fe+JeO+PQWjIumaMsokll/IklIiECF/XTRpsJmJZZWgL55d1elioUltEpaWsvqYiibUVumxP
                        LthXBWJcer8foUE8Kwy6N0m3JZ85YTXTvtz8Nah3qz1TIiOXiatKu0bM2pWkfrN3PWpcXiWTsdC6
                        +lXLT2go4VU5NN6F0OC2N1Hq7rUvKGOpbDAUTcQikVgo6/v5+/Dx8XE4/P2nLxiNRWKxRCh4shUr
                        nGj6QnbJPvoxCA3WkGjCn7HNsikjPttyITzBYG9Wc9w1h8Y7ERpWUBD1GrHolnXId3tS6QbxbNbl
                        0PigMz6MlO5LemUto496MrGhCQLrc2i8G6EhkMKj1bWMPoSfRLbrPm47/kJxRWgoywgNxRWhoQgt
                        NBAgTHlSkLvwk6trqiuyxEXWvROhIZDCslS/TCa86cktnmxsWLd1tiKHxgciNOa4eWK/qVWvtoy3
                        JxOKtKoyXM3Rr0FoCKQ0TdbN+iVVQu+fq1woPaxTK9i9yom2S5UTzwgNGyliGzTrLTJX4d0lYCYb
                        jbzUsWr3VN5f5WTHMz6+UPvXbzfxeDS8tW1ArXlfo+t36ezdVU7ehdCgIWMgdS8us/QC4snaOrgz
                        XnLBaDI2fKuSyYGb4rWOHBorEBquOTQ8IzQEUtgixRL3+4mJ3bi5itASv6FwNmdnLpPKZYl5G42k
                        E8PWoEuLtxgi2AO7VjlZyqGx7fnB+xAaEFNLGZu9arc+aLQuX/74Pmfo7+Flq3ExqleJbyUjrADn
                        uce6Kif/DyKDrhXcowUOAAAAAElFTkSuQmCC" alt="imagen logo**">
            </div>
            <div class="informacion-empresa">
                <span>Razon Social: Luis Enrique Casas A.</span>
                <span>Casa Matriz: El Alto - Cruce Viacha #4859 </span>
                <span>Telefonos: 75691348 - 25225223 </span>
                <span>La Paz - Bolivia</span>
            </div>
        </div>
        <div class="datos-docificacion">
            <span>NIT:1526154842</span>
            <span>Nº FACTURA: 000001254</span>
            <span>Nº AUTORIZACION: 1524621512</span>
        </div>
    </div>

    <div class="body">
        <div class="titulo">
            <span>FACTURA</span>
        </div>
        <hr>
        <div class="datos-cliente">
            <div>
                <b>La Paz,</b>
                <div class="dia">05</div>/ <div class="mes">12</div>/ <div class="anio">2023</div> <span>NIT:</span>
                <div>8362926010</div>
            </div>
            <div>
                Señores: <div>Cooperativa de Ahorro y Credito Solucredit San Silvestre LTDA</div>
            </div>
        </div>

        <div class="datos-compra">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col" width="10%">Cantidad</th>
                        <th scope="col" width="50%">Concepto</th>
                        <th scope="col" width="20%">P/U</th>
                        <th scope="col" width="20%">SubTotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">3</th>
                        <td>Caffe expres</td>
                        <td>10</td>
                        <td>30</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Rollo de queso</td>
                        <td>15</td>
                        <td>30</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="monto-total">
            <table class="table2">
                    <thead>
                        <tr>
                            <th scope="col" width="10%"></th>
                            <th scope="col" width="50%"></th>
                            <th scope="col" width="20%"></th>
                            <th scope="col" width="20%"></th>
                        </tr>
                    </thead>
                <tbody>
                    <tr>
                        <th class="ocultar" scope="row" width="43%"></th>
                        <td class="ocultar"></td>
                        <td>Total Bs.</td>
                        <td>525</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="literar-total">
            <table class="table">
                <tbody>
                    <tr>
                        <th scope="row">Son:</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="footer">
        <span>"Esta factura contribuye al desarrollo del pais. el uso ilicito de esta sera sancionado deacuerdo a ley".</span> <br>
        <span>Ley Nº 453 </span>

    </div>

</body>
</html>