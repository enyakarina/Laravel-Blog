<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        $post = new Post();
        $post->title = "My part time job";
        $post->content = "Hello Blog! I haven't mentioned it yet, but I work part time as a waitress at a small restaurant. Although it has helped me get a bit of money, it has also made me very miserable at times. A job like that puts everything into perspective. There are some rude entitled people in this world. People who will yell and cuss at you, people who will snap their fingers at you, people who aren't happy with anything..people who forget that food service workers are human. Despite that, there are also kind and patient people. People who will smile and greet you, people who understand that nothing is always perfect, people who will refrain from yelling at you even if you make a mistake... people who treat you like a decent human being. I guess I shouldn't complain much. I get to experience the best of both worlds. I also have to consider the fact that my coworkers are nice and hardworking people, my boss is tough but understanding. I have learned a lot about people, working as a simple waitress.";
            $post->user_id = User::first()->id;
            $post->save();

            $post = new Post();
            $post->title = "Why I chose codeup";
            $post->content = "As I mentioned in my previous post, I work part time as a waitress. I have done it for 3 years. That time has gotten me thinking many times of what I really want to do with my life. What is it that makes me truly happy? Certain situations kept me thinking back to my past, of things that I've enjoyed previously. I remembered back in the day when I was younger, I tinkered around my computer, creating silly little layouts for different websites. I loved the feeling of making something on my own. I loved figuring out how to even change the look. I loved the challenge, and I loved learning it. That was my first taste of coding. But back then, it never ocurred to me that I could possibly make a career out of that, so growing up I decided to just major in a science related field, (just not computer science). As I grew into my twenties, and got my associates in applied science, I was still unhappy! Fast-forward to 3 months ago, I was driving down the highway, and I see a codeup billboard. Huh, interesting. Learn to code? Maybe as a hobby like back in the day? NOPE. You can make a career out of coding. When I got home I kept researching about this program, and the more I did, the more inspired I felt to do something different. To learn how to program. I applied, got a call, took a couple of tests, and got accepted! I started the program on March 7, 2016. It has changed my life completely. It has made me love coding. I think that the best feeling in the world is when your code finally works and does what you expect it to. I have written countless of broken code, and made countless of silly mistakes. But I have also succeeded those many times, because in the end I figured it out. It's been an intense road, but definitely worth effort!";
            $post->user_id = User::first()->id;
            $post->save();
    }
}