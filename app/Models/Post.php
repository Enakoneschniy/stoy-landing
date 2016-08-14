<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'preview_text', 'detail_text', 'image', 'video', 'active'];

    public function getLatestPosts($count = 3){
        return $this->published()->orderBy('created_at', 'asc')->take($count)->get();
    }

    public function getActivePosts(){
        return $this->published()->orderBy('created_at', 'asc')->paginate(10);
    }

    public function scopePublished($query){
        return $query->where('active', 1);
    }

    public function setVideoAttribute($value){
        if($value){
            $arValue = explode('/', $value);
            $newValue = $arValue[count($arValue) - 1];
            $this->attributes['video'] = $newValue;
        }
    }
    public function setImageAttribute($value){
        if($this->attributes['video']){
            if($value == ""){
                $ch = curl_init('http://img.youtube.com/vi/'.$this->attributes['video'].'/sddefault.jpg');
                $fp = fopen(public_path().'/uploads/posts/origin/'.$this->attributes['video'].'.jpg', 'wb');
                curl_setopt($ch, CURLOPT_FILE, $fp);

                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_exec($ch);
                curl_close($ch);
                fclose($fp);
                $ch = curl_init('http://img.youtube.com/vi/'.$this->attributes['video'].'/sddefault.jpg');
                $fp = fopen(public_path().'/uploads/posts/resize/admin/'.$this->attributes['video'].'.jpg', 'wb');
                curl_setopt($ch, CURLOPT_FILE, $fp);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_exec($ch);
                curl_close($ch);
                fclose($fp);
                $ch = curl_init('http://img.youtube.com/vi/'.$this->attributes['video'].'/sddefault.jpg');
                $fp = fopen(public_path().'/uploads/posts/resize/preview/'.$this->attributes['video'].'.jpg', 'wb');
                curl_setopt($ch, CURLOPT_FILE, $fp);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_exec($ch);
                curl_close($ch);
                fclose($fp);
                $ch = curl_init('http://img.youtube.com/vi/'.$this->attributes['video'].'/sddefault.jpg');
                $fp = fopen(public_path().'/uploads/posts/resize/'.$this->attributes['video'].'.jpg', 'wb');
                curl_setopt($ch, CURLOPT_FILE, $fp);
                curl_setopt($ch, CURLOPT_HEADER, 0);
                curl_exec($ch);
                curl_close($ch);
                fclose($fp);

                $this->attributes['image'] = $this->attributes['video'].'.jpg';
            }else{
                $this->attributes['image'] = $value;
            }
        }else{
            $this->attributes['image'] = $value;
        }
    }
}
