## Developer guide for `<app-tag-manager/>` component

### Folder Structure

From Laravel Application

- resources
    - js
        - core
            - components
                - tag
                    - TagManager.Vue
                    

### Register

```js
    Vue.component('app-avatars-group', require('./components/tag/TagManager').default);
```


### Props 

1. tags
    - `type` : `Array`
    - `default` : `function () {
           return [];
       }`
2. list
    - `type` : `Array`
    - `default` : `function () {
               return [
                   {id: 1, name: 'Red', color: '#72C2EE'},
                   {id: 2, name: 'Black', color: '#72f2ee'},
                   {id: 3, name: 'Yellow', color: '#72C268'},
                   {id: 4, name: 'Blue', color: '#F2C268'}
               ];
           }`
3. listValueField
   - `type` : `String`
   - `Default` : `value`
4. tagPreloader
   - `type` : `Boolean`
   - `Default` : `false`
5. placeholder: 
   - `type`: `String`,
   - `default`: ``
6. disabled: 
   - `type`: `Boolean`,
   - `default`: `false`    
    
### Usages example
```
<template>
    <div>
        <app-tag-manager
            :tags="tags"
            :list="tagOptions"
            list-value-field="value"
            color-value-field="colors"
            :loaded-per-time="1"
            :tag-preloader="tagPreloader"
            @storeTag="testStoreData"
            @attachTag="attachTag"
            @detachTag="detachTag"
        />
    </div>
</template>

<script>
import CoreLibrary from "../../helpers/CoreLibrary";

export default {
    name: "TestTagManager",
    extends: CoreLibrary,
    data() {
        return {
            value: {},
            tagPreloader: false,
            tags: [],
            tagOptions: [
                {id: 1, value: 'Cricket', colors: '#e0e0e0'},
                {id: 2, value: 'Football', colors: '#bd5555'},
                {id: 3, value: 'Badminton', colors: '#d52828'},
                {id: 4, value: 'Option 4', colors: '#5e1414'},
                {id: 5, value: 'Option 5', colors: '#e8baba'},
                {id: 6, value: 'Option 6', colors: '#546cbb'},
                {id: 7, value: 'Option 7', colors: '#283fd5'},
                {id: 8, value: 'Option 8', colors: '#b21717'},
                {id: 9, value: 'Option 9', colors: '#05112f'},
                {id: 10, value: 'Option 10', colors: '#8c072f'},
            ]
        }
    },
    methods: {
        testStoreData(arg) {
            console.log(arg,'store')
            this.tagPreloader = true;
            this.addNewTagCreateOption(arg);
        },
        attachTag(tagId) {
            this.tags.push(tagId)
            console.log(tagId,'attach')
        },
        detachTag(tagId) {
            let index = this.tags.indexOf(tagId);
            this.tags.splice(index, 1);
            console.log(tagId,'detach')
        },
        addNewTagCreateOption(value) {
            this.axiosPost({
                url: 'store-tag-options',
                data: value
            }).then(response => {
                this.tagOptions = response.data.list;
                this.tags.push(response.data.new_id);
            }).finally(() => {
                this.tagPreloader = false;
            });
        },
    }
}
</script>
<<<<<<< HEAD:package/installer/src/resources/js/core/components/tag/readme.md

```
=======
>>>>>>> b983bde5b7820f41e54bb792fbdedf6e0fdc618e:resources/js/core/examples/tag/TestTagManager.vue
