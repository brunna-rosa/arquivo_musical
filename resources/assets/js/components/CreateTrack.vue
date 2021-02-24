    <template>
        <form action="" @submit="createTrack(track)">
            <h4 class="text-center font-weight-bold">Track creation form</h4>
            <div class="form-group">
                <input type="text" placeholder="Track title" v-model="track.title" class="form-control">

            </div>
            <div class="form-group">
                <textarea v-model="track.content" placeholder="Track content" class="form-control">

                </textarea>
            </div>
            <div class="form-group">
                <button :disabled="!isValid" class="btn btn-block btn-primary" @click.prevent="createTrack(track)">Submit
                </button>
            </div>
        </form>
    </template>

    <script>
        export default {
            name: "CreateTrack",
            data() {
                return {
                    track: {
                        title: '',
                        content: ''
                    }
                }
            },
            methods: {
                createtrack(track) {
                    this.$store.dispatch('createtrack', track)
                }
            },
            computed: {
                isValid() {
                    return this.track.title !== '' && this.track.content !== ''
                }
            }
        }
    </script>

    <style scoped>

    </style>
