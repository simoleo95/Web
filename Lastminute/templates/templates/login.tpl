<div class="login-page" style="border:groove; border-radius:10px 10px 10px 10px; padding-left:8px;">
 <div class="form">
   <form method="post"  action="index.php">
 <fieldset>
   <legend>Login</legend> 
	   <p><input type="hidden" name="controller" value="log" /></p>
	  <p id="error">{$errore}</p>
   <fieldset>
      <tr> 
        <td align="right"> username: </td>
        <td> <input type="text" name="username"/></td>
      </tr>

      <tr>
        <td align="right"> password: </td>
        <td> <input type="password" name="password"/> </td>
      </tr>
     </table>
   </fieldset>
     
     <tr>
        <td> <input type="submit" value="login" /> </td>
        
     </tr>

    </table>
 </fieldset>
  </fieldset>   
 </form> 

    </div>
                </div>