<template>
  <div class="container">

    
    <div class="category">
        <div class="title">
          <h1>WELCOME TO ADMIN DASH BOARD</h1>
        </div>
        <div class="back">
          <a class="btn btn-info" href="/" role="button">BACK</a>
        </div>
        

          <div class="button_add">
            <button type="button" class="btn btn-primary" @click="create_price">CREATE PRICE</button>
            
          </div>

           <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Store Name</th>
                <th scope="col">Price</th>
                <th scope="col"> </th>

              </tr>
            </thead>
            <tbody>
              
                <tr v-for="p in price" :key="p.id">
                  <th scope="row">{{p._id}}</th>
                  <td>{{p.store}}</td>
                  <td>{{p.price}}</td>
                  <td>
                    
                    <button type="button" class="btn btn-outline-success">Edit</button>
                    <button type="button" class="btn btn-outline-danger">Delete</button></td>
                </tr>
            
  
            </tbody>
          </table> 
      

    </div> 





        <div class="popup" v-show="popup_price==true">
          
          
          <div class="title text-center" style="width:100%; margin-bottom: 25px; color:white;">
            <h3>Create New Price</h3>
          </div>

          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="color: white;" >Store Name</label>
            <input v-model="price_store" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ravit Phone Shop">
          </div>
          
      
          <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label" style="color: white;" >Price</label>
            <input v-model="price_num" type="email" class="form-control" id="exampleFormControlInput1" placeholder="1235">
          </div>
          <div style="width:100%" class="text-center group_button">
              <button type="button" class="btn btn-outline-success text-center" style="color: white;border: solid white;" @click="submit_price">SUBMIT</button>
               <button type="button" class="btn btn-outline-danger text-center" style="color: black;border: solid white;" @click="cancel_price">CANCEL</button>
          </div>
         
        </div>

  </div> 
  

</template>


<script>

import axios from 'axios';

export default {

  data(){
    return{
      price:null,
      product_id:this.$route.params.pID,
      price_store:null,
      price_num:null,

      popup_price:false,
    }
  },
  methods:{
    create_price(){
        this.popup_price=true;
    },
    submit_price(){
 
      const article = {price:this.price_num,store:this.price_store,product_id:this.$route.params.pID};
     
      axios.post(`http://localhost:3001/api/price/create`,article)
      .then(response => (
        this.info = response
      ))
      .then(()=>{
        if(this.info){
          if(this.info.data.msg=='success'){
            alert("Create Success");
            this.list_price();
          }else{
            alert("Create False");
          }
        }
      })


        this.popup_price=false;
    },
    cancel_price(){
      this.popup_price=false;
    },
    list_price(){
      axios.get(`http://localhost:3001/api/price/${this.$route.params.pID}`)
        .then(response => (
          this.info = response
        ))
        .then(()=>{
          if(this.info){
            if(this.info.data.msg=='success'){
              this.price = this.info.data.datas;
            }else{
              alert("Error1");
            }
          }
    })
    }
   
      
  },
  mounted () {

    this.product_id = this.$route.params.pID;
  
   
    axios.get(`http://localhost:3001/api/price/${this.$route.params.pID}`)
        .then(response => (
          this.info = response
        ))
        .then(()=>{
          if(this.info){
            if(this.info.data.msg=='success'){
              this.price = this.info.data.datas;
            }else{
              alert("Error1");
            }
          }
    })
      
  },
  watch: {
 
  },

}
</script>




<style scoped>
     .container{
       
      width: 100vw;
      margin-top: 1vh;
      padding: 1vh;
      display: flex;
      /* background-color: aqua; */
      font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;
    }
    .hreader_sidebar{
      margin-bottom: 15px ;
      font-size: 25px;
      font-weight: bold;
      color:chocolate;
      background-color: antiquewhite;
    }

   .sidenav {
    text-align: left;
    height: 100%;
    width: 180px;
    /* background-color: ; */
    overflow-x: hidden;
    padding-top: 10px;
    border: 2px solid;
    margin-right: 15px ;
    
  }

    .sidenav a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 18px;
      color: black;
      display: block;
      font-weight: bold;
      color:coral;
      margin-top: 10px ;
    }


    .sidenav .subnav{
 
      width: 100%;
      padding-left: 35px ;
      
    }

    .sidenav a:hover {
      color: #f1f1f1;
    }

    .subnav {
      height: 100%;
      width: 140px;
      /* background-color: ; */
      text-align: left;
      overflow-x: hidden;
      padding-top: 5px;
   
    }

    .subnav a {
      padding: 6px 8px 6px 16px;
      text-decoration: none;
      font-size: 15px;
      color: black;
      display: block;
    }

    .subnav a:hover {
      color: #f1f1f1;
      background-color:cadetblue;
      border-radius:10px;
      
    }

    .subnav a:active {
      color: #f1f1f1;
      background-color:rgb(194, 12, 200);
      border-radius:10px; 
    }

    .category{
      width: 80vw;
      padding: 2vw;
      height: auto;
      border-radius: 5px;
      border: solid 1px;
    }

    .category .title{
      display: flex;
      margin-bottom: 2vh;
    }
    .category h1{
      background-color: coral;
      width: 40vw;
      font: 1.8em sans-serif;
      text-align: center;
      color: white;
      border-radius: 15px 0px 15px 0px;
  
    }
    .category .button_add{
      width: 15vw;
      margin-bottom: 15px;
    }

    .popup{
     
      position: absolute;
      top: 25%;
      left: 25%;
      border: solid 2px white;
      border-radius: 20px;
      background-color:  coral;
      width: 50vw;
      padding: 40px;
      text-align: left;
      
    }

    .popup  .group_button{
      margin-top: 50px ;
    }

    .back{
      text-align: left;
      margin-bottom: 15px ;
    }
    .back a{
      width: 70px;
      
    }

</style>