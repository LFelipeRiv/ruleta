class Service {
    request = $.ajax;
    baseUrl = 'http://localhost/pry/ruleta/';
 

    async getData(entity){
        return await this.request({
            url: `${this.baseUrl}${entity}`, 
            success: (response) => {

            console.log(`succ`);
            },
            error: (err)=>{
                console.log(err);
             
            },
            type: "POST"
          });
    }
  
    async registerData(entity, body){
     
        return await this.request({
          url:`${this.baseUrl}${entity}`,
          success: (response)=>{
         
            console.log(response);
            console.log(`succ`);
          },
          error: (err)=>{
            console.log(err);
          },
          type: "POST",
          data: body
        });
    
    }

    async updateData(entity, body){
     
        return await this.request({
          url:`${this.baseUrl}${entity}`,
          success: (response)=>{
            console.log('response update');
            console.log(response);
        },
        error: (err)=>{
            console.log('err update');
            console.log(err);
            
          },
          type: "POST",
          data: body
        });

    }

    updateData2(entity, body){
      return new Promise((resolve, reject) => {
        this.request({
          url:`${this.baseUrl}${entity}`,
          success: (response)=>{
            resolve (response);
          },
          error: (err)=>{
            reject(err);
          },
          type: "PUT",
          data: body
        });
      })
      
    }
  
    deleteData(entity, body){
      return new Promise((resolve, reject) => {
        this.request({
          url:`${this.baseUrl}${entity}`,
          success: (response)=>{
            resolve (response);
          },
          error: (err)=>{
            reject(err);
          },
          type: "DELETE",
          data: body
        });
      })
    }
  }