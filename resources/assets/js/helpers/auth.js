export function login(credentials){
  return new Promise((res, rej) => {
    axios.post('/api/auth/login', credentials).then(response => {
      res(response.data);
    }).catch((err) => {
      rej("DNI o Password Incorrecto");
    });
  })
}

export function getLocalUser(){
  const userStr = localStorage.getItem('user');

  if(!userStr){
    return null;
  }

  return JSON.parse(userStr);
}