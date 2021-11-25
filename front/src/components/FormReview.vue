<template>
  <div>
    <h2>Форма обратной связи</h2>
    <b-alert
        variant="success"
        :show="success"
        dismissible
        @dismissed="error=false"
        fade>
        Форма успешно отправилась
    </b-alert>
    <b-alert
      variant="danger"
      dismissible
      fade
      :show="error"
      @dismissed="error=false"
    >
      Что то пошло не так
    </b-alert>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      <b-form-group id="input-group-1" label="Ваше Имя:" label-for="input-1">
        <b-form-input
          id="input-1"
          v-model="form.name"
          placeholder="Введите свое имя"
          required
        ></b-form-input>
      </b-form-group>
      <b-form-group
        id="input-group-2"
        label="Ваш телефон:"
        label-for="input-2"
      >
        <b-form-input
          id="input-2"
          v-model="form.phone"
          type="tel"
          placeholder="Введите свой телефон"
          required
        ></b-form-input>
      </b-form-group>

    <b-form-group
        id="input-group-3"
        label="Ваш отзыв:"
        label-for="textarea-3"
    >
        <b-form-textarea
        id="textarea-3"
        v-model="form.text"
        placeholder="Введите свой отзыв"
        rows="3"
        max-rows="6"
        ></b-form-textarea>
     </b-form-group>

      <b-button type="submit" variant="primary">Отправить</b-button>
      <b-button type="reset" variant="danger">Очистить</b-button>
    </b-form>
  </div>
</template>

<script>
    import formReviewService from '../services/FormReviewSevices';
    export default {
    data() {
        return {
            form: {
                name: '',
                phone: '',
                text:''
            },
            show: true,
            success:false,
            error:false
        }
    },
    methods: {
        onSubmit(event) {
            event.preventDefault()
            formReviewService.saveForm(this.form).then(data=>{
                if(data.id)
                {
                    this.success = true;
                    setTimeout(() => {
                        this.success = false;
                        this.onReset(event)
                    }, 2000);
                }
            }).catch(error=>{
                    console.log(error);
                    this.error = true;
                    setTimeout(() => {
                        this.error = false;
                    }, 2000);
            });
        },
        onReset(event) {
            event.preventDefault()
            this.form.phone = ''
            this.form.name = ''
            this.form.text = ''
            this.show = false
            this.success = false
            this.error = false
            this.$nextTick(() => {
                this.show = true
            })
        }
    }
  }
</script>
