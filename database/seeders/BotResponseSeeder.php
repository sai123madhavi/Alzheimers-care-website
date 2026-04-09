<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BotResponse;

class BotResponseSeeder extends Seeder
{
    public function run()
    {
        $responses = [
            ['user_input' => 'hello', 'bot_reply' => 'Hello! How can I assist you today?'],
            ['user_input' => 'how are you?', 'bot_reply' => 'I am just a bot, but I am functioning properly!'],
            ['user_input' => 'how do u do', 'bot_reply' => 'Well how do you do'],
            ['user_input' => 'Who are u', 'bot_reply' => 'I am a talking bot'],
            ['user_input' => 'what can u do', 'bot_reply' => 'I can help you in many ways like brainstorming a topic, generating a summary etc..'],
            ['user_input' => 'what is the best daily routine', 'bot_reply' => 'Keep routines simple and consistent. Schedule activities for the time of day when the person is most alert.'],
            ['user_input' => 'how to help them get dressed', 'bot_reply' => 'Lay out clothes in the order they should be put on and offer simple choices.'],
            ['user_input' => 'how to manage their meals', 'bot_reply' => 'Serve small, healthy meals on a schedule and reduce distractions during mealtime.'],
            ['user_input' => 'what should i feed them', 'bot_reply' => 'Soft, easy-to-digest foods like soups, fruits, and well-cooked vegetables work well.'],
            ['user_input' => 'they don’t want to bathe', 'bot_reply' => 'Try to make the environment warm and safe, and explain each step calmly.'],
            ['user_input' => 'how do I talk to them', 'bot_reply' => 'Speak slowly and clearly, using simple words and yes-or-no questions.'],
            ['user_input' => 'they forget who I am', 'bot_reply' => 'Gently remind them of who you are and show photos or familiar items to help.'],
            ['user_input' => 'they keep asking the same thing', 'bot_reply' => 'Stay patient and respond calmly, using the same answer each time.'],
            ['user_input' => 'how to respond to confusion', 'bot_reply' => 'Don’t argue. Offer reassurance and gently redirect the conversation.'],
            ['user_input' => 'what if they get angry', 'bot_reply' => 'Stay calm, give them space, and try to identify what triggered the reaction.'],
            ['user_input' => 'how to keep them safe at home', 'bot_reply' => 'Remove tripping hazards, install locks on exits, and use night lights.'],
            ['user_input' => 'they want to go outside alone', 'bot_reply' => 'Redirect them with a task or accompany them on short walks.'],
            ['user_input' => 'they keep wandering', 'bot_reply' => 'Install door alarms and keep recent photos for identification.'],
            ['user_input' => 'how to manage their medication', 'bot_reply' => 'Use pill organizers and set reminders or alarms for each dose.'],
            ['user_input' => 'they don’t want to take medicine', 'bot_reply' => 'Offer it with food or drink, and explain calmly why it’s needed.'],
            ['user_input' => 'how to help with memory loss', 'bot_reply' => 'Use memory aids like labels, pictures, and written notes.'],
            ['user_input' => 'they forget their children', 'bot_reply' => 'Gently reintroduce family with photos and names. Avoid correcting harshly.'],
            ['user_input' => 'can they remember anything', 'bot_reply' => 'Yes, especially old memories. Music and photos can often help.'],
            ['user_input' => 'how to use music for memory', 'bot_reply' => 'Play familiar songs from their past. It can trigger positive emotions.'],
            ['user_input' => 'can games help', 'bot_reply' => 'Simple puzzles, memory games, or sorting activities can keep the mind active.'],
            ['user_input' => 'they seem sad', 'bot_reply' => 'Offer comfort, listen, and provide a peaceful environment.'],
            ['user_input' => 'how to cheer them up', 'bot_reply' => 'Spend time together, play calming music, or show them old photos.'],
            ['user_input' => 'what if they cry a lot', 'bot_reply' => 'Comfort them gently. Sometimes a hug or a familiar object helps.'],
            ['user_input' => 'they feel useless', 'bot_reply' => 'Involve them in simple tasks like folding towels or watering plants.'],
            ['user_input' => 'they miss their spouse', 'bot_reply' => 'Listen with empathy and talk about their loved one respectfully.'],
            ['user_input' => 'i feel overwhelmed', 'bot_reply' => 'It’s okay to feel that way. Take breaks and seek help from support groups.'],
            ['user_input' => 'i need a break', 'bot_reply' => 'Ask a trusted friend, family member, or respite service to help for a while.'],
            ['user_input' => 'how do i take care of myself', 'bot_reply' => 'Eat well, sleep enough, and make time for your own interests.'],
            ['user_input' => 'is it okay to feel frustrated', 'bot_reply' => 'Yes, you’re human. Take a deep breath and seek support if needed.'],
            ['user_input' => 'where can I find help', 'bot_reply' => 'Try local Alzheimer’s support groups, health services, or online communities.'],
            ['user_input' => 'what activities can we do together', 'bot_reply' => 'Try puzzles, gentle walks, music listening, or folding laundry together.'],
            ['user_input' => 'how to deal with sundowning', 'bot_reply' => 'Keep the room well-lit and reduce stimulation in the evening.'],
            ['user_input' => 'they are awake all night', 'bot_reply' => 'Create a bedtime routine and avoid caffeine or long naps.'],
            ['user_input' => 'they accuse me of stealing', 'bot_reply' => 'Don’t argue. Reassure them and help look for the item together.'],
            ['user_input' => 'they want to go home', 'bot_reply' => 'Reassure them and redirect gently with a calming activity.'],
            ['user_input' => 'they think I am their sibling', 'bot_reply' => 'Go along with it if it makes them feel safe. Correcting may cause distress.'],
            ['user_input' => 'how can I earn their trust', 'bot_reply' => 'Be calm, predictable, and gentle. They respond to your tone more than words.'],
            ['user_input' => 'they won’t eat anything', 'bot_reply' => 'Try smaller portions, favorite foods, or feeding at different times.'],
            ['user_input' => 'how to change adult diapers', 'bot_reply' => 'Be respectful, explain each step, and maintain their dignity.'],
            ['user_input' => 'how to prevent bedsores', 'bot_reply' => 'Change their position often and use cushions for support.'],
            ['user_input' => 'should I remind them of bad news', 'bot_reply' => 'Avoid painful truths unless necessary. Focus on comfort and reassurance.'],
            ['user_input' => 'can pets help', 'bot_reply' => 'Yes, calm and friendly pets can bring comfort and reduce agitation.'],
            ['user_input' => 'they don’t recognize the house', 'bot_reply' => 'Reassure them gently and avoid arguing. Use familiar objects to help.'],
            ['user_input' => 'they talk to people who aren’t there', 'bot_reply' => 'It may be comforting to them. Unless it causes harm, just observe.'],
            ['user_input' => 'they get lost even in familiar places', 'bot_reply' => 'Keep them supervised and consider wearable GPS trackers.'],
            ['user_input' => 'how often should they see a doctor', 'bot_reply' => 'Regular checkups every 3-6 months or as advised by their physician.'],
            ['user_input' => 'what to do in emergencies', 'bot_reply' => 'Keep emergency numbers handy, and prepare a medical info folder.'],
            ['user_input' => 'can aromatherapy help', 'bot_reply' => 'Scents like lavender or citrus may help calm or uplift their mood.'],
            ['user_input' => 'how to deal with hallucinations', 'bot_reply' => 'Stay calm, validate their feelings, and consult a doctor if frequent.'],
            ['user_input' => 'should I explain things', 'bot_reply' => 'Keep explanations short and clear. Focus more on reassurance.'],
            ['user_input' => 'can they still learn', 'bot_reply' => 'They may retain simple new routines with repetition and consistency.'],
            ['user_input' => 'how to stay patient', 'bot_reply' => 'Take breaks when you need them. Patience comes with self-care too.'],
        ];

        foreach ($responses as $response) {
            BotResponse::create($response);
        }
    }
}
