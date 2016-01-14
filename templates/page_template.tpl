{* smarty *}
<!DOCTYPE html>
<html lang="hu">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="banners.css" rel="stylesheet" />
    <title>Kereset-megjelenítő</title>
  </head>
  <body>
    <table class="container">
      <caption>
        {$user_inc->username} bevételei bannerekből
      </caption>
      <tr>
        <td>
          <table class="cols">
            <tr>
              <th>napon</th>
              <th>bevétel</th>
            </tr>
          </table>
        </td>
      </tr>
      <tr>
        <td>
          <div class="scrollable">
            <table class="cols">
              <tfoot>
                <tr>
                  <td>Összesen</td>
                  <td>{$user_inc->incomes[0]['kereset']|string_format:"%.2f"}
                </tr>
              </tfoot>
              <tbody>
                {section name=i loop=$user_inc->incomes start=1}
                  <tr class="{cycle values="odd, even"}">
                    <td>{$user_inc->incomes[i]['napon']}</td>
                    <td>{$user_inc->incomes[i]['kereset']|string_format:"%.2f"}</td>
                  </tr>
                {/section}
              </tbody>
            </table>
          </div>
        </td>
      </tr>
    </table>
  </body>
</html>