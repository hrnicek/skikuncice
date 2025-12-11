#backend
You creat transaltions system in resources/lang/cs and resources/lang/en. cs.json and en.json are generated from this files.

#frontend transaltion.
If you work in <script setup lang="ts"> you need you method wTrans from 'laravel-vue-i18n'
In template you can use it like this: {{ trans('navbar.home') }}