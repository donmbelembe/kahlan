<?php
namespace Kahlan\Spec\Suite\Plugin\Call;

use Kahlan\Plugin\Call\Message;

describe("Message", function() {

    describe("->name()", function() {

        it("Gets the message name", function() {

            $message = new Message([
                'name'    => 'message_name',
            ]);
            expect($message->name())->toBe('message_name');

        });

    });

    describe("->args()", function() {

        it('Gets the message args', function() {

            $message = new Message([
                'args'  => ['a', 'b', 'c'],
            ]);
            expect($message->args())->toBe(['a', 'b', 'c']);

        });

    });

    describe("->isStatic()", function() {

        it('Checks if the message is static', function() {

            $message = new Message([
                'static'  => true
            ]);
            expect($message->isStatic())->toBe(true);

            $message = new Message([
                'static'  => false
            ]);
            expect($message->isStatic())->toBe(false);

        });

    });

});