<!DOCTYPE html>
<html>
    <head>
   <link rel="icon" href="../php/icoon/money (1).png"/>
            <meta name=" add category "  content=" بإضافة  النفقات"/>
            <title>add category</title>
            <meta charset="UTF-8" />
    </head>
    <body style="background-color:rgb(3 244 197 / 35%)"  >
        <header style="background-color: rgb(87 138 143 / 39%);" >
            <button><a href="../php/home page.html "><h2>back</h2></a></button>
           
        </header>
        <main>
       <form action=""  method="post">
             <div>
               <p> <label>date</label>
                <input  type="date"   name="DATE"/></p>
            </div>
            <div> 
                <p>  <label for="Choose " >Choose a category</label>
                  <select  name="Choose a category" id="Choose " required>
                         <option value="1">food</option>
                         <option value="2">gift</option>
                         <option value="3">study</option>
                         <option value="4">holidays</option>
                         <option value="5">fule</option>
                         <option value="6">clothes</option>
                         <option value="7">home</option>
                        </p>
                        
                  </select>
                </div>

            <div> 
               <p> <label >the amount </label>
                <input type="the amount" required placeholder=" the amount" name="the amount" autofocus></p>
           </div>
            
          <div> 
          <p>  <label for="pay by" >pay by </label>
            <select  name="pay by" id="pay by" required>
                   <option value="1">check</option>
                   <option value="2">credit card</option>
                   <option value="3">Cash</option></p>
                  
            </select>
          </div>
          <div>
            <p><label>more details</label></p>
            <p> <textarea name="subject" cols="20" rows="10" placeholder="inter your  details"></textarea></p>
       </div>  
         <div>
             <p><label> inter picture</label>
             <input type="file"/></p>
         </div>
         <div> 
            <label> comment</label>
            <p><input type="text" required   maxlength="15" minlength="10" placeholder="in ther your comment" name="username" ></p> 
         </div>
         <p>
            <input type="submit" value="save" name="save">
             <input type="reset" value="Delete all">
             
        </p>
         
       
         
        





          </form>
        </main>
    </body>
</html>