<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>[Judul Report]</title>
</head>

<body style="font-family: Arial, sans-serif;">
    <div style="width: 100%; height: 100vh;">
        <div
            style="vertical-align: middle; text-align: center; align-items: center; justify-content: center; display: flex; flex-direction: column;">
            <div style="margin-top: 300px;">
                <h1>[Judul Report]</h1>
                <p class="date"> [Oct. 01, 2023 - Oct. 31, 2023]</p>
            </div>
        </div>
    </div>

    {{-- Postingan --}}
    <div style="page-break-before: always; width: 100%; height: 100vh; display: table;">
        <div style="display: table-cell; vertical-align: middle; text-align: center;">
            <h2 style="text-align: left">Overview - Postingan</h2>
            <table cellspacing="50" style="margin: 0 auto;">
                <tr>
                    <td>
                        <div
                            style="width: 225px; height: 150px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align:center; justify-content:center; background: #FFF; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); border-radius: 16px; padding: 15px; border: 2px solid #ddd;backdrop-filter: blur(20px);">
                            <div
                                style="width: 40px; height: 40px; background-color: #ffa12e; margin-bottom: 10px; border-radius: 50px; margin-left:95px; align-items:center;">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAhRJREFUaEPtmL8uBUEUxn9XIeJPgRCRiEalQKIRD0IhkSAiCvEIKLyASiFEouE5KBUkVCo04l+DiELcSfbe3DvZ2Zm9c8bdZbe4xe7OOd/3ne/M7D0lcn6Vco6fgkCzK1hUoKiApwJ/1kIDwB4wDXR7iuS7/Bk4BZaBRz1YXAUU+Eugzzez8Po7YAJ4qY0bR+AImBNOLhVuF1i1EXgA+qUyCse5BYaTCKiKfGtJm9noVjw6OOsCYUVt4ax4/i2BTqA1ku8LeLNJ2eDzIBXoBTaAtQjUDrClb28NAo7b5hN7Mq2FuoDtGvCVhIrEuhBofZMRJaDUfzIADbFbiVso9wR8LLQAvAMnKawmXgGVu6f8s5myiUeB8+iQHAduHEkEIeCYu/paO3ABjER3roFJ4NMhUCYIHAMzGtgDYDFLBEz+Vvf3DUBnHfrhVypg8nflfpuBwAdg64fgBEz+btF8b3KLrR+CEzD5uyPG9yYSymJLCYej6ElcmyfJ3w79WfeKqR+CVcDm77QETP0QhIDu+7Rg0/RDEAJxvpcioZ8PQQhIgXWJUxBQKoX4zndRv5I72DbqCsLnvdQWUsmyPNi6B4b0/5y6QofAvI9sAdeqgbMa8lavOH+roe5VBoe7Sv2x8vDg1UZAPR+MxutTGRivqyHCGbAS2buuwM3cYUScVhAQkdEjSFEBD/FElhYVEJHRI0juK/ADP5d6MRh4Pd0AAAAASUVORK5CYII="
                                    style="color:#fff; width:30px; margin-top:5px" />
                            </div>
                            <div
                                style="font-size: 15px; color: rgba(0, 0, 0, 0.63); margin-bottom:20px; font-weight: bold;">
                                Postingan</div>
                            <div style="font-size: 30px; font-weight: bold;">1.090</div>
                            <div
                                style="justify-content: center; align-items: center; text-align:center; justify-content:center;">
                                <table>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAgtJREFUaEPtlrlKBEEQhr/1fBTBh9BIUMT7xAsRTc1MzMXEwNRAEUXxwhNRMNJ3MPFNvN2CXphtZnZ7unoQpSecqar+v6q/ZqbEH79Kf1w/EeC3JxgnECeg7EC0kLKB6vSiJ9BtFN6rlWYUKBKgC7g15/YCD0VAFAUggi+AZiP6HRhKAAVjKQJAxF8CTZbKD2AwNERogCzxFZbgECEBxCInKZ237SIQ48ZiaiuFAhDxp0Cjo6JPYCwERAiAKWAfaEiIfwVaLRj73hcguceO0KlhWoBJ4BCqfsvfgAHgzjqxB7gCWhL3ZRIzwJEvhAZgDti1xIu/+wD5cH1bouQs+bDdWHsicTIJLwhfgCzxI8C1EZ4GII/6gXNrXyR2HtjLOwkfgDTxYoXhhHjRkQUgz0ZNx5NL7wWRF2AJ2LJsI8s4AZxZ3asFUIGQBU4uf26IPADt5Vffc4rIWeAgZfT1ACRFFlhsY+toK+/Fi4ud8gBIvdXy/81awuNZ4utZKKlt2ryGK1pWgA0X8RKTF0ByNoFlYBHYqXGQywQq6QvAdvnbsW6a5KrfC0CKdwBPdU7JAyClOoFHZ+Um0GcCrmfkBXCtWxUXAQLtgFf3fZfY9bBoIZdOxR2IO+Dikxox0UL/2UJKc7ilF2khNwXKqAigbKA6PU5A3UJlgTgBZQPV6XEC6hYqC8QJKBuoTv8BSExXMerEyO4AAAAASUVORK5CYII="
                                                style="width: 15px; margin-right: 5px;"></td>
                                        <td>
                                            <div style="color: rgba(0, 0, 0, 0.49); font-size: 12px;">5% dari 5 hari
                                                terakhir</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div
                            style="width: 225px; height: 150px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align:center; justify-content:center; background: #FFF; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); border-radius: 16px; padding: 15px; border: 2px solid #ddd;backdrop-filter: blur(20px);">
                            <div
                                style="width: 40px; height: 40px; background-color: #ffa12e; margin-bottom: 10px; border-radius: 50px; margin-left:95px; align-items:center;">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAhRJREFUaEPtmL8uBUEUxn9XIeJPgRCRiEalQKIRD0IhkSAiCvEIKLyASiFEouE5KBUkVCo04l+DiELcSfbe3DvZ2Zm9c8bdZbe4xe7OOd/3ne/M7D0lcn6Vco6fgkCzK1hUoKiApwJ/1kIDwB4wDXR7iuS7/Bk4BZaBRz1YXAUU+Eugzzez8Po7YAJ4qY0bR+AImBNOLhVuF1i1EXgA+qUyCse5BYaTCKiKfGtJm9noVjw6OOsCYUVt4ax4/i2BTqA1ku8LeLNJ2eDzIBXoBTaAtQjUDrClb28NAo7b5hN7Mq2FuoDtGvCVhIrEuhBofZMRJaDUfzIADbFbiVso9wR8LLQAvAMnKawmXgGVu6f8s5myiUeB8+iQHAduHEkEIeCYu/paO3ABjER3roFJ4NMhUCYIHAMzGtgDYDFLBEz+Vvf3DUBnHfrhVypg8nflfpuBwAdg64fgBEz+btF8b3KLrR+CEzD5uyPG9yYSymJLCYej6ElcmyfJ3w79WfeKqR+CVcDm77QETP0QhIDu+7Rg0/RDEAJxvpcioZ8PQQhIgXWJUxBQKoX4zndRv5I72DbqCsLnvdQWUsmyPNi6B4b0/5y6QofAvI9sAdeqgbMa8lavOH+roe5VBoe7Sv2x8vDg1UZAPR+MxutTGRivqyHCGbAS2buuwM3cYUScVhAQkdEjSFEBD/FElhYVEJHRI0juK/ADP5d6MRh4Pd0AAAAASUVORK5CYII="
                                    style="color:#fff; width:30px; margin-top:5px" />
                            </div>
                            <div
                                style="font-size: 15px; color: rgba(0, 0, 0, 0.63); margin-bottom:20px; font-weight: bold;">
                                Rata-rata views per postingan</div>
                            <div style="font-size: 30px; font-weight: bold;">1.090</div>
                            <div
                                style="justify-content: center; align-items: center; text-align:center; justify-content:center;">
                                <table>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAgtJREFUaEPtlrlKBEEQhr/1fBTBh9BIUMT7xAsRTc1MzMXEwNRAEUXxwhNRMNJ3MPFNvN2CXphtZnZ7unoQpSecqar+v6q/ZqbEH79Kf1w/EeC3JxgnECeg7EC0kLKB6vSiJ9BtFN6rlWYUKBKgC7g15/YCD0VAFAUggi+AZiP6HRhKAAVjKQJAxF8CTZbKD2AwNERogCzxFZbgECEBxCInKZ237SIQ48ZiaiuFAhDxp0Cjo6JPYCwERAiAKWAfaEiIfwVaLRj73hcguceO0KlhWoBJ4BCqfsvfgAHgzjqxB7gCWhL3ZRIzwJEvhAZgDti1xIu/+wD5cH1bouQs+bDdWHsicTIJLwhfgCzxI8C1EZ4GII/6gXNrXyR2HtjLOwkfgDTxYoXhhHjRkQUgz0ZNx5NL7wWRF2AJ2LJsI8s4AZxZ3asFUIGQBU4uf26IPADt5Vffc4rIWeAgZfT1ACRFFlhsY+toK+/Fi4ud8gBIvdXy/81awuNZ4utZKKlt2ryGK1pWgA0X8RKTF0ByNoFlYBHYqXGQywQq6QvAdvnbsW6a5KrfC0CKdwBPdU7JAyClOoFHZ+Um0GcCrmfkBXCtWxUXAQLtgFf3fZfY9bBoIZdOxR2IO+Dikxox0UL/2UJKc7ilF2khNwXKqAigbKA6PU5A3UJlgTgBZQPV6XEC6hYqC8QJKBuoTv8BSExXMerEyO4AAAAASUVORK5CYII="
                                                style="width: 15px; margin-right: 5px;"></td>
                                        <td>
                                            <div style="color: rgba(0, 0, 0, 0.49); font-size: 12px;">5% dari 5 hari
                                                terakhir</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table cellspacing="5" style="margin: 0 auto;">
                <tr>
                    <td>
                        <div style="border-radius: 16px; padding: 15px; border: 2px solid #ddd;">
                            <img src="https://quickchart.io/chart/render/sf-fd026d7a-4565-49d3-a955-c284ddb4932e"
                                style="width: 500px;">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        {{-- <img src="{{ $chartImagePath }}" style="max-width: 100%;" />  --}}
    </div>

    {{-- Pengikut --}}
    <div style="page-break-before: always; width: 100%; height: 100vh; display: table;">
        <div style="display: table-cell; vertical-align: middle; text-align: center;">
            <h2 style="text-align: left">Overview - Pengikut</h2>
            <table cellspacing="50" style="margin: 0 auto;">
                <tr>
                    <td>
                        <div
                            style="width: 225px; height: 150px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align:center; justify-content:center; background: #FFF; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); border-radius: 16px; padding: 15px; border: 2px solid #ddd;backdrop-filter: blur(20px);">
                            <div
                                style="width: 40px; height: 40px; background-color: #656EEA; margin-bottom: 10px; border-radius: 50px; margin-left:95px; align-items:center;">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABY5JREFUaEPtmXWobUUUh79nt5hYmJiIAXYXYmGLLYrYndit2PgQAxXFwO4GFVsU/UdFTCwsLOwWnQ/2vqw7d84++5x73r08eAsel3fOzJr1m1nxW+tMYDKXCZO5/UwBMN4vOMgXWAjYFNgA2BDw/1E+A55O3z8DPA58MQjwowWwCHA0sDmwZI8GvQs8DFwCfNnj3qHl/QKYATgNOLHfg8O+34HzgHP60dUPgK2Aqwou0s/5cc+HwL6Vi7XW1QuAmYBrgd06aPcmHwXuTmveA74Fvq7WzgvMDSwD7Fi5nK9YkiuBQ9oiaAtgLuAJYOWCYv1Xd7oV+K3lwTMDewJnAoLLxbO2baOvDQBv6vkUcKsUDjoduAjw9vsRgZwAnFLY/CCwTTelbQDcCeyUKfoe2BJ4udsBLb839T4AzJatN7hPbtLRDcDBwBWZgneS4ZsBn7Q0ru0y0/CTwMLZhi2AxzopaQIwP/ABYPDW8nlStjrg30khgngFmCMo96KWTin7z9KBTQCuT7e8T9j0c7qhdYA3JoXlQedawIvZGcbJBb0AsMKal6cKm0xtprixEJPDGeGgbwBtGpEsOr3ARODwoEAwS4yF5dUZs1QXOE84c79UPK/LbSgBMG1+BcweFu8C3DGGADzqCOCycKaxsUYbAEb9I2HhTykTeRN/FQCYoSxIys09VFBd0X3/ATcChxV0W7mt5PGSF8xZbOkFLgSOCwq9eV8gF403zUZpQwNcc1C2T5c9snDGc8C6TZ5QAvAUsFHYJPe5raDcl5k1+9xMlRejfKtr9PEo31VcKV97bFXp68/PzxlwCYCNhjWgllWB1wYIoARc4hcDtj7OPkOCWMv9wHbRlhKAf4Cpw6JFO1Tdfl3o8sRUD80u5FLgmMIlLQ+8GT63Bq3YDYCBFUXC1Yll9hvEZpc9qiC+qYPx2qA7/hiM+SGr0sWphNlm2rBJP/+lcDtj8ZGxYszUom3Td3sBmWbkIvITOdF4yFKAvXMtI2KlFANvAcuFTetV/cB4AJBmO8mo5XVgpW4vcE8ibNuHRcUSPkZoDqz67/q429OL7NoNwKmJxJ0VFj0EbN1gsEG+ZsXle8G1ScU6m7o5+wB7j1ossBd3A7B+NhkwcIyJUiaSXptFZIq+ml1VG1ktDcFeAj5NpG0v4IXCphlTdTbrTBe+G1GTOrFROUgsLHtXnCWe4xwntnt/pwHVARWgfzugkJ7vkADfkCqsL6eYts9Of6XQUdR1dfjg42TDYrneTgBs1C3jtXhT3nIUxyN3FQx9vzJIQmhGmxNYoXJDe+t85KgKjb0m6PL2pfDzhc9s/M9tC2CBqvpOEzZItiRdUfRJyd9o5PiM76jrpMxY40SbdKlh0tRS2jw4KavFGLDdM5VF2bmi0rH4tQFkbEmpnXpEMT6eBeLgy3bStnKENAEwBvS72NTb6BhITpqj6BbGgz30sEpZONPm3H7bkUmuRzeVONoL1GLxWjyryENfdhurSLokX1HerlKbcZGL2cphlK+ydqDb0gEbdWm5mSrym1qHkwfTZh6osk9ZaFG6AXCTs04zRxSbbAdbr3ZS3OPnpm6BxTZWFZK+o5p0tQGgC5mnS3NRi56F5Y8eDa6XSxQN2JJ/+xq2t43SBoAKHMDaqcnPc3HI5e8E9sRtRZYpnTb/R3+v9/srjmP8X7spbAtAPd7WLQ20wix1b2o47gM+So26baJxYsHSSP8tW81Zm6hJm756CFcvAOpNu1e+Wbq5bhfW9L2/KexfpdDWevoBoHI7JdNg6x8iGizy5XQlG/aepV8A9UH+4mKF1iXiIKCNIfYdNuwmgfqXnDb7hq0ZLYCozO5p42okYyOSu5jcxkRglfUXmL6NjocOEkDPtzeIDVMADOIWR6Njsn+B/wH7VPgxzO/SBwAAAABJRU5ErkJggg=="
                                    style="color:#fff; width:30px; margin-top:5px" />
                            </div>
                            <div
                                style="font-size: 15px; color: rgba(0, 0, 0, 0.63); margin-bottom:20px; font-weight: bold;">
                                Pengikut</div>
                            <div style="font-size: 30px; font-weight: bold;">20.087</div>
                            <div
                                style="justify-content: center; align-items: center; text-align:center; justify-content:center;">
                                <table>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAgtJREFUaEPtlrlKBEEQhr/1fBTBh9BIUMT7xAsRTc1MzMXEwNRAEUXxwhNRMNJ3MPFNvN2CXphtZnZ7unoQpSecqar+v6q/ZqbEH79Kf1w/EeC3JxgnECeg7EC0kLKB6vSiJ9BtFN6rlWYUKBKgC7g15/YCD0VAFAUggi+AZiP6HRhKAAVjKQJAxF8CTZbKD2AwNERogCzxFZbgECEBxCInKZ237SIQ48ZiaiuFAhDxp0Cjo6JPYCwERAiAKWAfaEiIfwVaLRj73hcguceO0KlhWoBJ4BCqfsvfgAHgzjqxB7gCWhL3ZRIzwJEvhAZgDti1xIu/+wD5cH1bouQs+bDdWHsicTIJLwhfgCzxI8C1EZ4GII/6gXNrXyR2HtjLOwkfgDTxYoXhhHjRkQUgz0ZNx5NL7wWRF2AJ2LJsI8s4AZxZ3asFUIGQBU4uf26IPADt5Vffc4rIWeAgZfT1ACRFFlhsY+toK+/Fi4ud8gBIvdXy/81awuNZ4utZKKlt2ryGK1pWgA0X8RKTF0ByNoFlYBHYqXGQywQq6QvAdvnbsW6a5KrfC0CKdwBPdU7JAyClOoFHZ+Um0GcCrmfkBXCtWxUXAQLtgFf3fZfY9bBoIZdOxR2IO+Dikxox0UL/2UJKc7ilF2khNwXKqAigbKA6PU5A3UJlgTgBZQPV6XEC6hYqC8QJKBuoTv8BSExXMerEyO4AAAAASUVORK5CYII="
                                                style="width: 15px; margin-right: 5px;"></td>
                                        <td>
                                            <div style="color: rgba(0, 0, 0, 0.49); font-size: 12px;">5% dari 5 hari
                                                terakhir</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div
                            style="width: 225px; height: 150px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align:center; justify-content:center; background: #FFF; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); border-radius: 16px; padding: 15px; border: 2px solid #ddd;backdrop-filter: blur(20px);">
                            <div
                                style="width: 40px; height: 40px; background-color: #656EEA; margin-bottom: 10px; border-radius: 50px; margin-left:95px; align-items:center;">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABY5JREFUaEPtmXWobUUUh79nt5hYmJiIAXYXYmGLLYrYndit2PgQAxXFwO4GFVsU/UdFTCwsLOwWnQ/2vqw7d84++5x73r08eAsel3fOzJr1m1nxW+tMYDKXCZO5/UwBMN4vOMgXWAjYFNgA2BDw/1E+A55O3z8DPA58MQjwowWwCHA0sDmwZI8GvQs8DFwCfNnj3qHl/QKYATgNOLHfg8O+34HzgHP60dUPgK2Aqwou0s/5cc+HwL6Vi7XW1QuAmYBrgd06aPcmHwXuTmveA74Fvq7WzgvMDSwD7Fi5nK9YkiuBQ9oiaAtgLuAJYOWCYv1Xd7oV+K3lwTMDewJnAoLLxbO2baOvDQBv6vkUcKsUDjoduAjw9vsRgZwAnFLY/CCwTTelbQDcCeyUKfoe2BJ4udsBLb839T4AzJatN7hPbtLRDcDBwBWZgneS4ZsBn7Q0ru0y0/CTwMLZhi2AxzopaQIwP/ABYPDW8nlStjrg30khgngFmCMo96KWTin7z9KBTQCuT7e8T9j0c7qhdYA3JoXlQedawIvZGcbJBb0AsMKal6cKm0xtprixEJPDGeGgbwBtGpEsOr3ARODwoEAwS4yF5dUZs1QXOE84c79UPK/LbSgBMG1+BcweFu8C3DGGADzqCOCycKaxsUYbAEb9I2HhTykTeRN/FQCYoSxIys09VFBd0X3/ATcChxV0W7mt5PGSF8xZbOkFLgSOCwq9eV8gF403zUZpQwNcc1C2T5c9snDGc8C6TZ5QAvAUsFHYJPe5raDcl5k1+9xMlRejfKtr9PEo31VcKV97bFXp68/PzxlwCYCNhjWgllWB1wYIoARc4hcDtj7OPkOCWMv9wHbRlhKAf4Cpw6JFO1Tdfl3o8sRUD80u5FLgmMIlLQ+8GT63Bq3YDYCBFUXC1Yll9hvEZpc9qiC+qYPx2qA7/hiM+SGr0sWphNlm2rBJP/+lcDtj8ZGxYszUom3Td3sBmWbkIvITOdF4yFKAvXMtI2KlFANvAcuFTetV/cB4AJBmO8mo5XVgpW4vcE8ibNuHRcUSPkZoDqz67/q429OL7NoNwKmJxJ0VFj0EbN1gsEG+ZsXle8G1ScU6m7o5+wB7j1ossBd3A7B+NhkwcIyJUiaSXptFZIq+ml1VG1ktDcFeAj5NpG0v4IXCphlTdTbrTBe+G1GTOrFROUgsLHtXnCWe4xwntnt/pwHVARWgfzugkJ7vkADfkCqsL6eYts9Of6XQUdR1dfjg42TDYrneTgBs1C3jtXhT3nIUxyN3FQx9vzJIQmhGmxNYoXJDe+t85KgKjb0m6PL2pfDzhc9s/M9tC2CBqvpOEzZItiRdUfRJyd9o5PiM76jrpMxY40SbdKlh0tRS2jw4KavFGLDdM5VF2bmi0rH4tQFkbEmpnXpEMT6eBeLgy3bStnKENAEwBvS72NTb6BhITpqj6BbGgz30sEpZONPm3H7bkUmuRzeVONoL1GLxWjyryENfdhurSLokX1HerlKbcZGL2cphlK+ydqDb0gEbdWm5mSrym1qHkwfTZh6osk9ZaFG6AXCTs04zRxSbbAdbr3ZS3OPnpm6BxTZWFZK+o5p0tQGgC5mnS3NRi56F5Y8eDa6XSxQN2JJ/+xq2t43SBoAKHMDaqcnPc3HI5e8E9sRtRZYpnTb/R3+v9/srjmP8X7spbAtAPd7WLQ20wix1b2o47gM+So26baJxYsHSSP8tW81Zm6hJm756CFcvAOpNu1e+Wbq5bhfW9L2/KexfpdDWevoBoHI7JdNg6x8iGizy5XQlG/aepV8A9UH+4mKF1iXiIKCNIfYdNuwmgfqXnDb7hq0ZLYCozO5p42okYyOSu5jcxkRglfUXmL6NjocOEkDPtzeIDVMADOIWR6Njsn+B/wH7VPgxzO/SBwAAAABJRU5ErkJggg=="
                                    style="color:#fff; width:30px; margin-top:5px" />
                            </div>
                            <div
                                style="font-size: 15px; color: rgba(0, 0, 0, 0.63); margin-bottom:20px; font-weight: bold;">
                                Evolusi pengikut</div>
                            <div style="font-size: 30px; font-weight: bold;">20.087</div>
                            <div
                                style="justify-content: center; align-items: center; text-align:center; justify-content:center;">
                                <table>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAgtJREFUaEPtlrlKBEEQhr/1fBTBh9BIUMT7xAsRTc1MzMXEwNRAEUXxwhNRMNJ3MPFNvN2CXphtZnZ7unoQpSecqar+v6q/ZqbEH79Kf1w/EeC3JxgnECeg7EC0kLKB6vSiJ9BtFN6rlWYUKBKgC7g15/YCD0VAFAUggi+AZiP6HRhKAAVjKQJAxF8CTZbKD2AwNERogCzxFZbgECEBxCInKZ237SIQ48ZiaiuFAhDxp0Cjo6JPYCwERAiAKWAfaEiIfwVaLRj73hcguceO0KlhWoBJ4BCqfsvfgAHgzjqxB7gCWhL3ZRIzwJEvhAZgDti1xIu/+wD5cH1bouQs+bDdWHsicTIJLwhfgCzxI8C1EZ4GII/6gXNrXyR2HtjLOwkfgDTxYoXhhHjRkQUgz0ZNx5NL7wWRF2AJ2LJsI8s4AZxZ3asFUIGQBU4uf26IPADt5Vffc4rIWeAgZfT1ACRFFlhsY+toK+/Fi4ud8gBIvdXy/81awuNZ4utZKKlt2ryGK1pWgA0X8RKTF0ByNoFlYBHYqXGQywQq6QvAdvnbsW6a5KrfC0CKdwBPdU7JAyClOoFHZ+Um0GcCrmfkBXCtWxUXAQLtgFf3fZfY9bBoIZdOxR2IO+Dikxox0UL/2UJKc7ilF2khNwXKqAigbKA6PU5A3UJlgTgBZQPV6XEC6hYqC8QJKBuoTv8BSExXMerEyO4AAAAASUVORK5CYII="
                                                style="width: 15px; margin-right: 5px;"></td>
                                        <td>
                                            <div style="color: rgba(0, 0, 0, 0.49); font-size: 12px;">5% dari 5 hari
                                                terakhir</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table cellspacing="5" style="margin: 0 auto;">
                <tr>
                    <td>
                        <div style="border-radius: 16px; padding: 15px; border: 2px solid #ddd;">
                            <img src="https://quickchart.io/chart/render/sf-31f9dcfb-8300-4c60-b322-4f23f3176fb5"
                                style="width: 500px;">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        {{-- <img src="{{ $chartImagePath }}" style="max-width: 100%;" />  --}}
    </div>

    {{-- Suka --}}
    <div style="page-break-before: always; width: 100%; height: 100vh; display: table;">
        <div style="display: table-cell; vertical-align: middle; text-align: center;">
            <h2 style="text-align: left">Overview - Suka</h2>
            <table cellspacing="50" style="margin: 0 auto;">
                <tr>
                    <td>
                        <div
                            style="width: 225px; height: 150px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align:center; justify-content:center; background: #FFF; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); border-radius: 16px; padding: 15px; border: 2px solid #ddd;backdrop-filter: blur(20px);">
                            <div
                                style="width: 40px; height: 40px; background-color: #FF3D40; margin-bottom: 10px; border-radius: 50px; margin-left:95px; align-items:center;">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABCpJREFUaEPtmVvITlkYx38fRk5NJEpyMVMjYkIUKVdDRhgMwoyQY7hwCEXklCs5JIcYxhByHKcYyQ0RLrhhMFwgjRtymHEKg/2f9tZjtfe717v3/j599T319l68z7PW839O67/WW0E1l4pq7j81AD53BmsyUN0y0AgYCAwDvgFaAm+Ay8CfwBXgFHAnAdhXQE/gW6Ad0An4AvgbuAHsBw4Bz3wD41tCzYA5wBSgQcriL4G5wBrgfahbC5gJLAXqpdjL+bXAcuBRGhAfAIrYAeDLtMWc388BIwKnawO7ga5l2j8GBgGnS9mlARgN/FbmxlZd0azjEfVSW4wMynVnkkIpAIrYhRjDM8CesN7/At4Gtds+qN2OwE8ekX4KnASuhh8BbAt0AHonlGgX4FIciCQAqnM1VSvHaAKwOSUjM4JyW5mg8yswu0Rtq9fUO8Md+7th0z93100CsAyY5yhPBdZ7lpOafZ2jqyZe5Wm/AFji6C4CFvsAaAo8dBQ3hBPIc///1cYHY/aX0GAcoOiXI9uAUcbgBdAimGb/2EXiMjAG2GqU1IgqpSfl7F6ArspJpVPfrKXzZ28aACkMNUorgoNlVgEOZVliIzDRGCqwY9MA6DTVVImkG3Axy+4F2HwfTLU/zDrngwnWPQ2ATr8mRqk58KAAZ7Is0SagLdeNoSiK6MhHiesBnYCNjY5q0W3qLM5ksdH5cM0Y3ga+TgMgAxlG0jkka1kcyGvTBzhuFjkL9EgDIEY42CiJxIlYfQ5ZDUwzG28CJqUB+BnYYZRuBmRMtRgxy6oCovF53ylnkTvR7ZI90BC45zSyUAt9VYqo93yz4b/hQfYJnUiiEgsDQx3dVnx4UFEAJ8fQlthSTgKgMSqmqQlU1SAUKDfbt4DWcdEpRad1gKnrdSGJRH0gjlMur/HNjE5ZsV3r1ytAk9CO05I9YDcTCYujz7robPf1ylNPzm+J0RU3E7GLlbQbmYyUUnESq/suZIqJNyVPpyM1TT4FRHdnm20Nj4jRZgYgQ9FaXS1dEGKHOjfySJLzinxqln0yEDkXB+K/8PaUFcSQ8HrqRt7LeTlWDoCkTGQFIef1WuEOCW/nswCQje6ruxzwAvEjcMSzlgpxPiuAJBB6nRCHSgPxA/B73shHgSq3hGyAlQlxJlsCAtEfOJGQCTmvRzI9pdhpU1bZ2LXzANA6Ilf7HBCvgQExIJKc11uSeiGT5AXgC0JXw6Mxkc/lfJ4ecKOlTKiuXfkOqBu8Qh8Ov23Z5Ha+SABaS2XzCVcHxGPiXqN1eGmS5ZYiSsg60TcEYZvU/i4yWEjki5hCSdETiIPhHxdWR2eFXpozN2zchkVnINqjF3DMgJDzeiwTsEKlsgDIyX7hxURvmdNLnA25AFUmgFyO+RrXAPCNVGXp1WSgsiLru261z8AHVS+9MfsQsY4AAAAASUVORK5CYII="
                                    style="color:#fff; width:30px; margin-top:5px" />
                            </div>
                            <div
                                style="font-size: 15px; color: rgba(0, 0, 0, 0.63); margin-bottom:20px; font-weight: bold;">
                                Suka</div>
                            <div style="font-size: 30px; font-weight: bold;">20.087</div>
                            <div
                                style="justify-content: center; align-items: center; text-align:center; justify-content:center;">
                                <table>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAgtJREFUaEPtlrlKBEEQhr/1fBTBh9BIUMT7xAsRTc1MzMXEwNRAEUXxwhNRMNJ3MPFNvN2CXphtZnZ7unoQpSecqar+v6q/ZqbEH79Kf1w/EeC3JxgnECeg7EC0kLKB6vSiJ9BtFN6rlWYUKBKgC7g15/YCD0VAFAUggi+AZiP6HRhKAAVjKQJAxF8CTZbKD2AwNERogCzxFZbgECEBxCInKZ237SIQ48ZiaiuFAhDxp0Cjo6JPYCwERAiAKWAfaEiIfwVaLRj73hcguceO0KlhWoBJ4BCqfsvfgAHgzjqxB7gCWhL3ZRIzwJEvhAZgDti1xIu/+wD5cH1bouQs+bDdWHsicTIJLwhfgCzxI8C1EZ4GII/6gXNrXyR2HtjLOwkfgDTxYoXhhHjRkQUgz0ZNx5NL7wWRF2AJ2LJsI8s4AZxZ3asFUIGQBU4uf26IPADt5Vffc4rIWeAgZfT1ACRFFlhsY+toK+/Fi4ud8gBIvdXy/81awuNZ4utZKKlt2ryGK1pWgA0X8RKTF0ByNoFlYBHYqXGQywQq6QvAdvnbsW6a5KrfC0CKdwBPdU7JAyClOoFHZ+Um0GcCrmfkBXCtWxUXAQLtgFf3fZfY9bBoIZdOxR2IO+Dikxox0UL/2UJKc7ilF2khNwXKqAigbKA6PU5A3UJlgTgBZQPV6XEC6hYqC8QJKBuoTv8BSExXMerEyO4AAAAASUVORK5CYII="
                                                style="width: 15px; margin-right: 5px;"></td>
                                        <td>
                                            <div style="color: rgba(0, 0, 0, 0.49); font-size: 12px;">5% dari 5 hari
                                                terakhir</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div
                            style="width: 225px; height: 150px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align:center; justify-content:center; background: #FFF; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); border-radius: 16px; padding: 15px; border: 2px solid #ddd;backdrop-filter: blur(20px);">
                            <div
                                style="width: 40px; height: 40px; background-color: #FF3D40; margin-bottom: 10px; border-radius: 50px; margin-left:95px; align-items:center;">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABCpJREFUaEPtmVvITlkYx38fRk5NJEpyMVMjYkIUKVdDRhgMwoyQY7hwCEXklCs5JIcYxhByHKcYyQ0RLrhhMFwgjRtymHEKg/2f9tZjtfe717v3/j599T319l68z7PW839O67/WW0E1l4pq7j81AD53BmsyUN0y0AgYCAwDvgFaAm+Ay8CfwBXgFHAnAdhXQE/gW6Ad0An4AvgbuAHsBw4Bz3wD41tCzYA5wBSgQcriL4G5wBrgfahbC5gJLAXqpdjL+bXAcuBRGhAfAIrYAeDLtMWc388BIwKnawO7ga5l2j8GBgGnS9mlARgN/FbmxlZd0azjEfVSW4wMynVnkkIpAIrYhRjDM8CesN7/At4Gtds+qN2OwE8ekX4KnASuhh8BbAt0AHonlGgX4FIciCQAqnM1VSvHaAKwOSUjM4JyW5mg8yswu0Rtq9fUO8Md+7th0z93100CsAyY5yhPBdZ7lpOafZ2jqyZe5Wm/AFji6C4CFvsAaAo8dBQ3hBPIc///1cYHY/aX0GAcoOiXI9uAUcbgBdAimGb/2EXiMjAG2GqU1IgqpSfl7F6ArspJpVPfrKXzZ28aACkMNUorgoNlVgEOZVliIzDRGCqwY9MA6DTVVImkG3Axy+4F2HwfTLU/zDrngwnWPQ2ATr8mRqk58KAAZ7Is0SagLdeNoSiK6MhHiesBnYCNjY5q0W3qLM5ksdH5cM0Y3ga+TgMgAxlG0jkka1kcyGvTBzhuFjkL9EgDIEY42CiJxIlYfQ5ZDUwzG28CJqUB+BnYYZRuBmRMtRgxy6oCovF53ylnkTvR7ZI90BC45zSyUAt9VYqo93yz4b/hQfYJnUiiEgsDQx3dVnx4UFEAJ8fQlthSTgKgMSqmqQlU1SAUKDfbt4DWcdEpRad1gKnrdSGJRH0gjlMur/HNjE5ZsV3r1ytAk9CO05I9YDcTCYujz7robPf1ylNPzm+J0RU3E7GLlbQbmYyUUnESq/suZIqJNyVPpyM1TT4FRHdnm20Nj4jRZgYgQ9FaXS1dEGKHOjfySJLzinxqln0yEDkXB+K/8PaUFcSQ8HrqRt7LeTlWDoCkTGQFIef1WuEOCW/nswCQje6ruxzwAvEjcMSzlgpxPiuAJBB6nRCHSgPxA/B73shHgSq3hGyAlQlxJlsCAtEfOJGQCTmvRzI9pdhpU1bZ2LXzANA6Ilf7HBCvgQExIJKc11uSeiGT5AXgC0JXw6Mxkc/lfJ4ecKOlTKiuXfkOqBu8Qh8Ov23Z5Ha+SABaS2XzCVcHxGPiXqN1eGmS5ZYiSsg60TcEYZvU/i4yWEjki5hCSdETiIPhHxdWR2eFXpozN2zchkVnINqjF3DMgJDzeiwTsEKlsgDIyX7hxURvmdNLnA25AFUmgFyO+RrXAPCNVGXp1WSgsiLru261z8AHVS+9MfsQsY4AAAAASUVORK5CYII="
                                    style="color:#fff; width:30px; margin-top:5px" />
                            </div>
                            <div
                                style="font-size: 15px; color: rgba(0, 0, 0, 0.63); margin-bottom:20px; font-weight: bold;">
                                Rata-rata suka per video</div>
                            <div style="font-size: 30px; font-weight: bold;">20.087</div>
                            <div
                                style="justify-content: center; align-items: center; text-align:center; justify-content:center;">
                                <table>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAgtJREFUaEPtlrlKBEEQhr/1fBTBh9BIUMT7xAsRTc1MzMXEwNRAEUXxwhNRMNJ3MPFNvN2CXphtZnZ7unoQpSecqar+v6q/ZqbEH79Kf1w/EeC3JxgnECeg7EC0kLKB6vSiJ9BtFN6rlWYUKBKgC7g15/YCD0VAFAUggi+AZiP6HRhKAAVjKQJAxF8CTZbKD2AwNERogCzxFZbgECEBxCInKZ237SIQ48ZiaiuFAhDxp0Cjo6JPYCwERAiAKWAfaEiIfwVaLRj73hcguceO0KlhWoBJ4BCqfsvfgAHgzjqxB7gCWhL3ZRIzwJEvhAZgDti1xIu/+wD5cH1bouQs+bDdWHsicTIJLwhfgCzxI8C1EZ4GII/6gXNrXyR2HtjLOwkfgDTxYoXhhHjRkQUgz0ZNx5NL7wWRF2AJ2LJsI8s4AZxZ3asFUIGQBU4uf26IPADt5Vffc4rIWeAgZfT1ACRFFlhsY+toK+/Fi4ud8gBIvdXy/81awuNZ4utZKKlt2ryGK1pWgA0X8RKTF0ByNoFlYBHYqXGQywQq6QvAdvnbsW6a5KrfC0CKdwBPdU7JAyClOoFHZ+Um0GcCrmfkBXCtWxUXAQLtgFf3fZfY9bBoIZdOxR2IO+Dikxox0UL/2UJKc7ilF2khNwXKqAigbKA6PU5A3UJlgTgBZQPV6XEC6hYqC8QJKBuoTv8BSExXMerEyO4AAAAASUVORK5CYII="
                                                style="width: 15px; margin-right: 5px;"></td>
                                        <td>
                                            <div style="color: rgba(0, 0, 0, 0.49); font-size: 12px;">5% dari 5 hari
                                                terakhir</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table cellspacing="5" style="margin: 0 auto;">
                <tr>
                    <td>
                        <div style="border-radius: 16px; padding: 15px; border: 2px solid #ddd;">
                            <img src="https://quickchart.io/chart/render/sf-dcdd166e-7bd0-4617-a452-f70e29a8d8ef"
                                style="width: 500px;">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        {{-- <img src="{{ $chartImagePath }}" style="max-width: 100%;" />  --}}
    </div>

    {{-- Komentar --}}
    <div style="page-break-before: always; width: 100%; height: 100vh; display: table;">
        <div style="display: table-cell; vertical-align: middle; text-align: center;">
            <h2 style="text-align: left">Overview - Komentar</h2>
            <table cellspacing="50" style="margin: 0 auto;">
                <tr>
                    <td>
                        <div
                            style="width: 225px; height: 150px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align:center; justify-content:center; background: #FFF; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); border-radius: 16px; padding: 15px; border: 2px solid #ddd;backdrop-filter: blur(20px);">
                            <div
                                style="width: 40px; height: 40px; background-color: #3CC7F4; margin-bottom: 10px; border-radius: 50px; margin-left:95px; align-items:center;">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAh5JREFUaEPtmLlKxUAUQM/zB0RcUFH/QBAEUX/FQnAt7LSxU7AQGws7RUVQ8D9ELQQRRARb972xsHHLQCLPvCSTmcmYCSTNezBzlzN3SeZWKPhTKbj/lAB5R1A3Aq3AOtAPNFqGeAEOgDHgKWxLB0A4fwKI3/98roAe4LXaqA7ADjD0n55X2VoDJk0BboG2nABEFLpMAWz73gQMAhuA+J+Y9jopZBsg0N8BnAINIYN/fHYZQPg9Doi8j80a1wE6gUsdAGf6PPCtCuBUn9cBcKrP6wA41ed1ABJzzkIPldlTrgGZwqwZZPZKANvvijIC4ZyWnUhZA6ETkB1YWcQuFfGNdxcXn9m/T5RzspDmWQObwGhRAa79S72YUhQqAs/Avn+Zf0i8X/qLrqVQYsoWoQZKgLzbqHIERK9tT9Ero8DqvPnlFLAA1KfQEd5S0+dlOqKc2AKGZYJQM5of8CZ2q0B3Ctm4LTV9XqYrCqAZOANaJMKBrJieLXnjjxGZMcl6ZJ+X6YzLb5FCwfg8PBkLdIp0mQAWI6ZnMrvV6+LFFNvnZYpUCjT8fjgGemMMiMnGDPAoc8B03QQgyva5Pw48NHUsrXxWAG/e+GMOWAE+0xrPYl8WALvANHCfhUOqOkwALvwi3lM1muV+HYB3z4F5YBn4yNIZHV0qAF/ANjDrfdre6RizIaMC0Acc2XDCRKcKgIkda7IlgLWjTam48BH4AdE8eDHiCnrHAAAAAElFTkSuQmCC"
                                    style="color:#fff; width:30px; margin-top:5px" />
                            </div>
                            <div
                                style="font-size: 15px; color: rgba(0, 0, 0, 0.63); margin-bottom:20px; font-weight: bold;">
                                Komentar</div>
                            <div style="font-size: 30px; font-weight: bold;">20.087</div>
                            <div
                                style="justify-content: center; align-items: center; text-align:center; justify-content:center;">
                                <table>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAgtJREFUaEPtlrlKBEEQhr/1fBTBh9BIUMT7xAsRTc1MzMXEwNRAEUXxwhNRMNJ3MPFNvN2CXphtZnZ7unoQpSecqar+v6q/ZqbEH79Kf1w/EeC3JxgnECeg7EC0kLKB6vSiJ9BtFN6rlWYUKBKgC7g15/YCD0VAFAUggi+AZiP6HRhKAAVjKQJAxF8CTZbKD2AwNERogCzxFZbgECEBxCInKZ237SIQ48ZiaiuFAhDxp0Cjo6JPYCwERAiAKWAfaEiIfwVaLRj73hcguceO0KlhWoBJ4BCqfsvfgAHgzjqxB7gCWhL3ZRIzwJEvhAZgDti1xIu/+wD5cH1bouQs+bDdWHsicTIJLwhfgCzxI8C1EZ4GII/6gXNrXyR2HtjLOwkfgDTxYoXhhHjRkQUgz0ZNx5NL7wWRF2AJ2LJsI8s4AZxZ3asFUIGQBU4uf26IPADt5Vffc4rIWeAgZfT1ACRFFlhsY+toK+/Fi4ud8gBIvdXy/81awuNZ4utZKKlt2ryGK1pWgA0X8RKTF0ByNoFlYBHYqXGQywQq6QvAdvnbsW6a5KrfC0CKdwBPdU7JAyClOoFHZ+Um0GcCrmfkBXCtWxUXAQLtgFf3fZfY9bBoIZdOxR2IO+Dikxox0UL/2UJKc7ilF2khNwXKqAigbKA6PU5A3UJlgTgBZQPV6XEC6hYqC8QJKBuoTv8BSExXMerEyO4AAAAASUVORK5CYII="
                                                style="width: 15px; margin-right: 5px;"></td>
                                        <td>
                                            <div style="color: rgba(0, 0, 0, 0.49); font-size: 12px;">5% dari 5 hari
                                                terakhir</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </td>
                    <td>
                        <div
                            style="width: 225px; height: 150px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align:center; justify-content:center; background: #FFF; filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25)); border-radius: 16px; padding: 15px; border: 2px solid #ddd;backdrop-filter: blur(20px);">
                            <div
                                style="width: 40px; height: 40px; background-color: #3CC7F4; margin-bottom: 10px; border-radius: 50px; margin-left:95px; align-items:center;">
                                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAh5JREFUaEPtmLlKxUAUQM/zB0RcUFH/QBAEUX/FQnAt7LSxU7AQGws7RUVQ8D9ELQQRRARb972xsHHLQCLPvCSTmcmYCSTNezBzlzN3SeZWKPhTKbj/lAB5R1A3Aq3AOtAPNFqGeAEOgDHgKWxLB0A4fwKI3/98roAe4LXaqA7ADjD0n55X2VoDJk0BboG2nABEFLpMAWz73gQMAhuA+J+Y9jopZBsg0N8BnAINIYN/fHYZQPg9Doi8j80a1wE6gUsdAGf6PPCtCuBUn9cBcKrP6wA41ed1ABJzzkIPldlTrgGZwqwZZPZKANvvijIC4ZyWnUhZA6ETkB1YWcQuFfGNdxcXn9m/T5RzspDmWQObwGhRAa79S72YUhQqAs/Avn+Zf0i8X/qLrqVQYsoWoQZKgLzbqHIERK9tT9Ero8DqvPnlFLAA1KfQEd5S0+dlOqKc2AKGZYJQM5of8CZ2q0B3Ctm4LTV9XqYrCqAZOANaJMKBrJieLXnjjxGZMcl6ZJ+X6YzLb5FCwfg8PBkLdIp0mQAWI6ZnMrvV6+LFFNvnZYpUCjT8fjgGemMMiMnGDPAoc8B03QQgyva5Pw48NHUsrXxWAG/e+GMOWAE+0xrPYl8WALvANHCfhUOqOkwALvwi3lM1muV+HYB3z4F5YBn4yNIZHV0qAF/ANjDrfdre6RizIaMC0Acc2XDCRKcKgIkda7IlgLWjTam48BH4AdE8eDHiCnrHAAAAAElFTkSuQmCC"
                                    style="color:#fff; width:30px; margin-top:5px" />
                            </div>
                            <div
                                style="font-size: 15px; color: rgba(0, 0, 0, 0.63); margin-bottom:20px; font-weight: bold;">
                                Rata-rata komen per video</div>
                            <div style="font-size: 30px; font-weight: bold;">20.087</div>
                            <div
                                style="justify-content: center; align-items: center; text-align:center; justify-content:center;">
                                <table>
                                    <tr>
                                        <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                        <td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAAAgtJREFUaEPtlrlKBEEQhr/1fBTBh9BIUMT7xAsRTc1MzMXEwNRAEUXxwhNRMNJ3MPFNvN2CXphtZnZ7unoQpSecqar+v6q/ZqbEH79Kf1w/EeC3JxgnECeg7EC0kLKB6vSiJ9BtFN6rlWYUKBKgC7g15/YCD0VAFAUggi+AZiP6HRhKAAVjKQJAxF8CTZbKD2AwNERogCzxFZbgECEBxCInKZ237SIQ48ZiaiuFAhDxp0Cjo6JPYCwERAiAKWAfaEiIfwVaLRj73hcguceO0KlhWoBJ4BCqfsvfgAHgzjqxB7gCWhL3ZRIzwJEvhAZgDti1xIu/+wD5cH1bouQs+bDdWHsicTIJLwhfgCzxI8C1EZ4GII/6gXNrXyR2HtjLOwkfgDTxYoXhhHjRkQUgz0ZNx5NL7wWRF2AJ2LJsI8s4AZxZ3asFUIGQBU4uf26IPADt5Vffc4rIWeAgZfT1ACRFFlhsY+toK+/Fi4ud8gBIvdXy/81awuNZ4utZKKlt2ryGK1pWgA0X8RKTF0ByNoFlYBHYqXGQywQq6QvAdvnbsW6a5KrfC0CKdwBPdU7JAyClOoFHZ+Um0GcCrmfkBXCtWxUXAQLtgFf3fZfY9bBoIZdOxR2IO+Dikxox0UL/2UJKc7ilF2khNwXKqAigbKA6PU5A3UJlgTgBZQPV6XEC6hYqC8QJKBuoTv8BSExXMerEyO4AAAAASUVORK5CYII="
                                                style="width: 15px; margin-right: 5px;"></td>
                                        <td>
                                            <div style="color: rgba(0, 0, 0, 0.49); font-size: 12px;">5% dari 5 hari
                                                terakhir</div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <table cellspacing="5" style="margin: 0 auto;">
                <tr>
                    <td>
                        <div style="border-radius: 16px; padding: 15px; border: 2px solid #ddd;">
                            <img src="https://quickchart.io/chart/render/sf-198774c5-96bb-4a9d-89ff-15a22865e686"
                                style="width: 500px;">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
        {{-- <img src="{{ $chartImagePath }}" style="max-width: 100%;" />  --}}
    </div>
</body>

</html>
