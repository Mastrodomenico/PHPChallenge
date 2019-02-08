<template>
  <div>
    <h5>Seus dados</h5>
    <div class="div-c inline-2">
      <div class="divided-column">
        <label>Nome</label>
        <input type="text" placeholder="" name="name">
      </div>
      <div class="divided-column">
        <label>Email</label>
        <input type="email" placeholder=" " name="email">
      </div>
      <div class="divided-column">
        <label>CPF</label>
        <input type="text" placeholder=" " name="cpf">
      </div>
      <div class="divided-column" v-for="(phone , index) in phones">
        <label>Telefone <span class="exluir-tel" v-if="index > 0" @click="revomePhone(index)"> Excluir </span></label>
        <input type="text" placeholder=" " v-model="phone.value" name="phone[]">
      </div>
    </div>
    <div class="div-c inline-2">
      <button @click="addOtherPhone()" type="button" class="button-sq"><i class="icon icon-add-1"></i>Adicionar outro telefone</button>
    </div>
  </div>
</template>

<script>
  export default {
    name: "DadosComponent.vue",
    data(){
      return {
        name: '',
        email: '',
        cpf: '',
        phones: [
          {value: ''}
        ]
      }
    },
    methods:{
      addOtherPhone(){
        this.phones.push({value: ''})
      },
      revomePhone(index){
        this.phones.splice(index, 1);
      }
    }
  }
</script>

<style scoped>
.exluir-tel{
  color: #f0114c;
  font-weight: 900;
}
</style>