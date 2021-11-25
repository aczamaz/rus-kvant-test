import axios from 'axios';
class FormReviewServices
{
    api_url = '';
    constructor()
    {
        this.api_url = process.env.VUE_APP_API_URL;
    }
    async saveForm(form)
    {
        const { data } = await axios.post(this.api_url+'review', form);
        return data;
    }
}

export default new FormReviewServices();
