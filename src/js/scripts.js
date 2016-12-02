// Empty JS for your own code to be here
// sign_up
   function chkads()
   {
   if (lf_addstu.name.value=="")
   {
   alert("Please input your name!");
   lf_addstu.name.select();
   return false;
   }
   if (lf_addstu.street.value=="")
   {
   alert("Please input your Street!");
   lf_addstu.street.select();
   return false;
   }
   if (lf_addstu.city.value=="")
   {
   alert("Please input your City!");
   lf_addstu.city.select();
   return false;
   }

   if (lf_addstu.pass.value=="")
   {
   alert("Please input your password!");
   lf_addstu.pass.select();
   return false;
   }

   if (lf_addstu.zip.value=="")
   {
   alert("Please input your zip code!");
   lf_addstu.zip.select();
   return false;
   }
   if(!IsNum(lf_addstu.zip.value)){
   alert("Please type NUMBER on zip code!")
   lf_addstu.zip.focus();
   return false;
   }

  //  if (lf_addstu.age.value=="")
  //  {
  //  alert("Please input your age!");
  //  lf_addstu.age.select();
  //  return false;
  //  }
   if(!IsNum(lf_addstu.age.value)){
   alert("Please type NUMBER on age!")
   lf_addstu.age.focus();
   return false;
   }

  //  if (lf_addstu.home_in.value=="")
  //  {
  //  alert("Please input your income!");
  //  lf_addstu.home_in.select();
  //  return false;
  //  }
   if(!IsNum(lf_addstu.home_in.value)){
   alert("Please type NUMBER on income!")
   lf_addstu.home_in.focus();
   return false;
   }

  //  if (lf_addstu.biz_in.value=="")
  //  {
  //  alert("Please input your income!");
  //  lf_addstu.biz_in.select();
  //  return false;
  //  }
   if(!IsNum(lf_addstu.biz_in.value)){
   alert("Please type NUMBER on income!")
   lf_addstu.biz_in.focus();
   return false;
   }

   if (lf_addstu.biz_in.value!="" && (lf_addstu.home_in.value!="" || lf_addstu.age.value!=""))
   {
   alert("Please choose only ONE kind!");
   lf_addstu.biz_in.select();
   return false;
   }

    if (lf_addstu.biz_in.value!="" && lf_addstu.home_in.value!="" && lf_addstu.age.value!="")
    {
    alert("Please choose only ONE kind!");
    return false;
    }

    if (lf_addstu.biz_in.value=="" && lf_addstu.home_in.value=="" && lf_addstu.age.value=="")
    {
    alert("Please specify customer kind!");
    return false;
    }

    if (lf_addstu.biz_in.value=="" && lf_addstu.home_in.value!="" && lf_addstu.age.value=="")
    {
    alert("Please type your age!");
    lf_addstu.age.select();
    return false;
    }

    if (lf_addstu.biz_in.value=="" && lf_addstu.home_in.value=="" && lf_addstu.age.value!="")
    {
    alert("Please type your income!");
    lf_addstu.home_in.select();
    return false;
    }


    if(!IsNum(lf_addstu.buy_inventory.value)){
    alert("Please type NUMBER on Inventory!")
    lf_addstu.buy_inventory.focus();
    return false;
    }

   }



function check(){

  if(!IsNum(lf_addstu2.pro_price.value)){
  alert("Please type NUMBER on product price!")
  lf_addstu2.pro_price.focus();
  return false;
  }

  if(!IsNum(lf_addstu2.sales_price.value)){
  alert("Please type NUMBER on salary!")
  lf_addstu2.sales_price.focus();
  return false;
  }


}



   function IsNum(num){
   var reNum=/^\d*$/;
   return(reNum.test(num));
  }



// login
