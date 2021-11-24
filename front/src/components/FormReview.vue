<template>
  <div>
    <h2>Form Review</h2>
    <b-form @submit="onSubmit" @reset="onReset" v-if="show">
      <b-form-group id="input-group-1" label="Your Name:" label-for="input-1">
        <b-form-input
          id="input-1"
          v-model="form.name"
          placeholder="Enter name"
          required
        ></b-form-input>
      </b-form-group>
      <b-form-group
        id="input-group-2"
        label="phone:"
        label-for="input-2"
      >
        <b-form-input
          id="input-2"
          v-model="form.phone"
          type="phone"
          placeholder="Enter phone"
          required
        ></b-form-input>
      </b-form-group>

    <b-form-group
        id="input-group-3"
        label="text message:"
        label-for="textarea-3"
    >
        <b-form-textarea
        id="textarea-3"
        v-model="form.text"
        placeholder="Enter something..."
        rows="3"
        max-rows="6"
        ></b-form-textarea>
     </b-form-group>

      <b-button type="submit" variant="primary">Submit</b-button>
      <b-button type="reset" variant="danger">Reset</b-button>
    </b-form>
  </div>
</template>

<script>
    import axios from 'axios';
  export default {
    data() {
      return {
        form: {
          name: '',
          phone: '',
          text:''
        },
        show: true
      }
    },
    methods: {
      onSubmit(event) {
        event.preventDefault()
        axios.post('http://localhost/api/review', this.form)
        .then((res) => {
            console.log(res);
        })
        .catch((error) => {
            console.log(error);// error.response.status Check status code
        }).finally(() => {
            //Perform action in always
        });
      },
      onReset(event) {
        event.preventDefault()
        // Reset our form values
        this.form.phone = ''
        this.form.name = ''
        // Trick to reset/clear native browser form validation state
        this.show = false
        this.$nextTick(() => {
          this.show = true
        })
      }
    }
  }
</script>
