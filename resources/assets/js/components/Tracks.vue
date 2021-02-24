    <template>
        <div>
            <h4 class="text-center font-weight-bold">Tracks</h4>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="post in posts">
                    <td>{{track.title}}</td>
                    <td>{{track.content}}</td>
                    <td>
                        <button class="btn btn-danger" @click="deleteTrack(track)"><i style="color:white" class="fa fa-trash"></i></button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

    </template>

    <script>
        import {mapGetters} from 'vuex'

        export default {
            name: "Tracks",
            mounted() {
                this.$store.dispatch('fetchTracks')
            },
            methods: {
                deleteTrack(track) {
                    this.$store.dispatch('deleteTracks',track)
                }
            },
            computed: {
                ...mapGetters([
                    'tracks'
                ])
            }
        }
    </script>

    <style scoped>

    </style>
